export type state = 'other' | 'closed'
export type browser = 'chrome' | 'firefox'

export interface Ticket {
  id: number
  name: string
  description: Text, 
  context: Text, 

}