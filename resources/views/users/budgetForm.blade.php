@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-90 lg:w-8/12 bg-white p-6 mt-6 rounded-lg">
            <div class="">
                <form action="" method="" class="">
                    
                    <h2 class="font-bold md:text-xl uppercase text-center mt-4">Budget Month and Pay Frequecy</h2>
                    <div class="grid grid-cols-1 gap-4 justify-items-center mt-4">
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
                
                    <h2 class="font-bold uppercase md:text-xl text-center mt-4">Enter Your Paycheck Amount(s)</h2>
                    <div class="grid grid-cols-1 gap-4 justify-items-center mt-4">
                        
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
                                                
                        <button type="submit" class="btn-info p-2 rounded mt-4 w-80">Save</button>
                    </div>
                </form>
                <form action="">
                    <h2 class="font-bold uppercase md:text-xl text-center mt-4">Expenses</h2>
                    <div class="mt-4 grid grid-cols-1 gap-4 justify-items-center">
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
                        <button type="submit" class="w-80 rounded btn-info p-2 mt-4">Add</button>
                        
                    </div>
                </form>

                
            </div>
        
                <section class="grid grid-auto-rows max-w-2xl mt-4 mx-auto">
                    <div class="grid grid-cols-5 bg-gray-300 p-2 uppercase">
                        <div>Month</div>
                        <div>Name</div>
                        <div>Amount</div>
                        <div>Paycheck</div>
                        <div>delete</div>
                    </div>
                    <div class="grid grid-cols-5 p-2 border-b-2 border-gray-300">
                        <div>January</div>
                        <div>Mortgage</div>
                        <div>&dollar;950</div>
                        <div>1</div>
                        <form action="">
                            <button class="btn btn-error btn-xs">delete</button>
                        </form>
                    </div>
                </section>
                
                <div class="w-80 mx-auto">
                    <form action="" class="">
                        <button type="submit" class="btn-info p-2 rounded w-80 mt-4 mx-auto">Submit</button>
                    </form>
                </div>
        </div>
    </div>
@endsection()