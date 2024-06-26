// export interface Transaction {
//   amount: number;
//   user_balance: string;
//   operation_response: string;
//   date: Date;
// }

export interface Transaction {
  id: number;
  amount: string;
  created_at: string;
  date: string;
  operation_id: number;
  operation_type:string;
  operation_response: string;
  operation_request: string;
  updated_at: string;
  user_balance: string;
  user_id: number;
}
