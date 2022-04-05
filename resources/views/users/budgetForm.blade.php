@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-90 lg:w-8/12 bg-white p-6 mt-6 rounded-lg">
            <div class="flex justify-center">
                <form action="" class="">

                    <h2 class="font-bold uppercase text-center mt-4">Budget Month and Pay Frequecy</h2>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 justify-items-center mt-4 border-2">
                        <label for="month" class="sr-only">Month</label>
                        <select name="month" id="month" class="form-select rounded w-80">
                            <option value="">Select Month</option>
                            <option value="">January</option>
                            <option value="">February</option>
                            <option value="">March</option>
                            <option value="">April</option>
                            <option value="">May</option>
                            <option value="">June</option>
                            <option value="">July</option>
                            <option value="">August</option>
                            <option value="">September</option>
                            <option value="">October</option>
                            <option value="">November</option>
                            <option value="">December</option>
                        </select>
                        <label for="pay-frequency" class="sr-only">Pay Frequency</label>
                        <select name="pay-frequency" id="pay-frequency" class="form-select rounded w-80">
                            <option value="">Select Frequency</option>
                            <option value="">Weekly</option>
                            <option value="">Bi-Weekly</option>
                            <option value="">Monthly</option>
                        </select>
                    </div>

                    <h2 class="font-bold uppercase text-center mt-4">Enter Your Paycheck Amount(s)</h2>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 justify-items-center mt-4 border-2">
                        
                        <div class="">
                            <label for="paycheck1" class="sr-only">Paycheck 1</label>
                            <input type="text" name="paycheck1" id="paycheck1" placeholder="$200" class="form-input rounded w-80">
                        </div>
                            
                        <div class="">
                            <label for="paycheck2" class="sr-only">Paycheck 2</label>
                            <input type="text" name="paycheck2" id="paycheck2" placeholder="$200 " class="form-input rounded w-80">
                        </div>
                        
                        <div class="">
                            <label for="paycheck3" class="sr-only">Paycheck 3</label>
                            <input type="text" name="paycheck3" id="paycheck3" placeholder="$200 " class="form-input rounded w-80">
                        </div>
                        
                        <div class="">
                            <label for="paycheck4" class="sr-only">Paycheck 4</label>
                            <input type="text" name="paycheck4" id="paycheck4" placeholder="$200" class="form-input rounded w-80">
                        </div>

                        <div class="">
                            <label for="paycheck5" class="sr-only">Paycheck 5</label>
                            <input type="text" name="paycheck5" id="paycheck5" placeholder="$200" class="form-input rounded w-80">
                        </div>
                                                
                    </div>

                    <h2 class="font-bold uppercase text-center mt-4">Expenses</h2>
                    <div class="mt-4 grid grid-cols-1 gap-4 justify-items-center border-2">
                        <div>
                            <label for="expense" class="sr-only">Expense Name</label>
                            <input type="text" name="expense" id="expense" placeholder="Expense Name" class="form-input rounded w-80">
                        </div>
                            
                        <div>
                            <label for="amount" class="sr-only">Amount</label>
                            <input type="text" name="amount" id="amount" placeholder="Amount" class="form-input rounded w-80">
                        </div>

                        <div>
                            <label for="paycheck" class="sr-only">Which Paycheck?</label>
                            <select name="paycheck" id="paycheck"  class="form-select rounded w-80">
                                <option value="">Select Paycheck</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                            </select>
                        </div>

                        <button type="submit" class="w-80 bg-blue-400 text-white rounded p-2 mt-4">Add</button>
                        
                    </div>
                </form>

                
            </div>
            <table class="mx-auto mt-4 table-auto expense-table border-2 border-red-500">
                <thead class="bg-gray-200 rounded-t">
                  <tr>
                    <th
                      scope="col"
                      class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase "
                    >
                      month
                    </th>
                    <th
                      scope="col"
                      class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase "
                    >
                      name
                    </th>
                    <th
                      scope="col"
                      class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase "
                    >
                      amount
                    </th>
                    <th
                      scope="col"
                      class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase "
                    >
                      paycheck
                    </th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-300">
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="">
                            <div class="ont-medium text-gray-900">
                                January
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="">
                            <div class="">
                                Mortgage
                            </div>
                        </div>
                      </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="">
                            <span
                            class="inline-flex px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full "
                            >
                            &dollar;2100
                            </span>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="">
                            <p>1</p>
                        </div>
                    </td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
@endsection()