import axios, { AxiosRequestConfig, Method } from 'axios'
import type { Ticket } from '../../types/tickets'

const callAPI = async <R>(path: string, method: Method, config: Partial<AxiosRequestConfig> = {}): Promise<R> => {
	const res = await axios({
	  url: `http://localhost:80/api${path}`,
	  method,
	  ...config
	})
  
	return res.data
  }

export const api = {
	
	createTicket(data: Omit<Ticket, 'id'>) {
	  return callAPI<Ticket>(`/tickets`, 'POST', { data })
	},
  }