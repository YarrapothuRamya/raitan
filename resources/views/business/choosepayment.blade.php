@extends('layouts.businessapp')

@section('content')
<div class="bg-white p-8 rounded-lg shadow-md">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

     <!-- Payment Options Block -->
     <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-gray-900">Choose Payment Options</h2>
            <div class="grid grid-cols-1 gap-4 mt-4">
                <div class="flex items-start p-4 bg-white rounded-lg shadow-md cursor-pointer" tabindex="0" role="button" aria-label="Credit / Debit Card 0% Interest EMI">
                    <img alt="Credit / Debit Card 0% Interest EMI" src="https://akam.cdn.jdmagicbox.com/images/icontent/listingbusiness/EMI_zero_Interest_plan_new.svg" class="w-14 h-14">
                    <div class="ml-4 flex-1">
                        <div class="text-lg font-medium text-gray-900">Credit / Debit Card 0% Interest EMI</div>
                        <div class="text-sm text-gray-600">All Major Bank Cards Supported <span class="text-gray-500">•</span> No Cost EMI <span class="text-gray-500">•</span> Pay in Easy Installments</div>
                    </div>
                    <i class="ml-4 text-gray-500">&#8250;</i>
                </div>
                <div class="flex items-start p-4 bg-white rounded-lg shadow-md cursor-pointer" tabindex="0" role="button" aria-label="Cards Auto Pay">
                    <img alt="Cards Auto Pay" src="https://akam.cdn.jdmagicbox.com/images/icontent/listingbusiness/Cards_AutoPay_new.svg" class="w-14 h-14">
                    <div class="ml-4 flex-1">
                        <div class="text-lg font-medium text-gray-900">Cards AutoPay</div>
                        <div class="text-sm text-gray-600">All Major Bank Cards Supported <span class="text-gray-500">•</span> Monthly Auto Debit <span class="text-gray-500">•</span> One Year Commitment</div>
                    </div>
                    <i class="ml-4 text-gray-500">&#8250;</i>
                </div>
                <div class="flex items-start p-4 bg-white rounded-lg shadow-md cursor-pointer" tabindex="0" role="button" aria-label="UPI Auto Pay">
                    <img alt="UPI Auto Pay" src="https://akam.cdn.jdmagicbox.com/images/icontent/listingbusiness/UPI_Autopay_new.svg" class="w-14 h-14">
                    <div class="ml-4 flex-1">
                        <div class="text-lg font-medium text-gray-900">UPI AutoPay</div>
                        <div class="text-sm text-gray-600">All Major Bank Cards Supported <span class="text-gray-500">•</span> Monthly Auto Debit <span class="text-gray-500">•</span> One Year Commitment</div>
                    </div>
                    <i class="ml-4 text-gray-500">&#8250;</i>
                </div>
                <div class="flex items-start p-4 bg-white rounded-lg shadow-md cursor-pointer" tabindex="0" role="button" aria-label="One Year Upfront Pay">
                    <img alt="One Year Upfront Pay" src="https://akam.cdn.jdmagicbox.com/images/icontent/listingbusiness/installment_new.svg" class="w-14 h-14">
                    <div class="ml-4 flex-1">
                        <div class="text-lg font-medium text-gray-900">One Year Upfront Pay</div>
                        <div class="text-sm text-gray-600">₹ 42,480</div>
                    </div>
                    <i class="ml-4 text-gray-500">&#8250;</i>
                </div>
            </div>
        </div>


        <!-- Payment Summary Block -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-gray-900">Payment Summary</h2>
            
            <div class="mt-4 flex flex-col space-y-4">
                <div class="flex justify-between items-center p-4 bg-gray-100 rounded-lg">
                    <div>
                        <mark class="bg-gray-300 p-1 rounded">Standard Plan</mark> Monthly Fee
                        <div class="mt-1 flex items-center space-x-2">
                            <del class="text-gray-500">₹ 134</del>
                            <span class="text-gray-900">₹ 100 per day</span>
                        </div>
                    </div>
                    <div class="text-gray-900">
                        <div>
                            <del class="text-gray-500">₹ 4,000</del>
                            <span class="bg-red-500 text-white px-2 py-1 rounded ml-2 text-xs">25% OFF</span>
                        </div>
                        <div class="font-semibold">
                            <span>₹</span> 3,000
                        </div>
                    </div>
                </div>
                <p class="text-gray-800">
                    <span>Visibility In Search + Online Catalogue + Payment Solutions + Smart Lead Management + Competitor Analysis + Premium Customer Support + Mobile Banner+ JD Rating Certificate</span>
                    <button class="bg-transparent text-blue-500 hover:underline ml-2">...view more</button>
                </p>
                <div class="mt-4 p-4 bg-gray-100 rounded-lg">
                    <label class="block text-gray-900">GST (18%)</label>
                    <div class="flex justify-between items-center font-semibold text-gray-900">
                        <span>₹</span> 540
                    </div>
                    <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">+ Add GST Details for Input Credit</button>
                    <div class="mt-4 hidden">
                        <input class="border border-gray-300 p-2 rounded w-full" required value="">
                        <label class="block text-gray-900 mt-2">Add GST Number For Input Credit</label>
                        <button class="mt-2 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">SUBMIT</button>
                    </div>
                </div>
                <div class="mt-4 flex justify-between font-semibold text-gray-900">
                    <span>Total Monthly Fee</span>
                    <span class="text-lg">
                        <span>₹</span> 3,540
                    </span>
                </div>
            </div>
        </div>

       
    </div>
</div>


@endsection