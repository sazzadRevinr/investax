<x-app-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users Form Info') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <main>
                    <div class="container">
                        <div class="info-heading my-5">
                            <h2 class="text-center mb-4">Individual Information Checklist</h2>
                            <p class="lead text-center">
                                Please note that most of 2023-2024 tax returns are due for lodgment
                                by 15 May 2024 (unless you have been informed otherwise). In order
                                for us to complete your return by the due date, we will require your
                                documentation no later than 1 March 2024.
                            </p>
                            <p class="lead text-center">
                                During peak tax periods our turnaround is 6-8 weeks from when we
                                receive your documentation.
                            </p>
                        </div>

                        <form class="step-form bg-white border border-secondary-subtle rounded-3 p-5">
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">
                                    If your return is not required urgently, please indicate the period
                                    that would be suitable:
                                </label>

                                <div class="inline-flex items-center mr-4">
                                    <input class="form-radio text-indigo-600" type="radio" name="requiredPeriod" id="urgent" />
                                    <label class="ml-2" for="urgent"> Urgent </label>
                                </div>

                                <div class="inline-flex items-center mr-4">
                                    <input class="form-radio text-indigo-600" type="radio" name="requiredPeriod" id="4-6-week" />
                                    <label class="ml-2" for="4-6-week"> 4-6 Weeks </label>
                                </div>

                                <div class="inline-flex items-center mr-4">
                                    <input class="form-radio text-indigo-600" type="radio" name="requiredPeriod" id="6-8-week" />
                                    <label class="ml-2" for="6-8-week"> 6-8 Weeks </label>
                                </div>

                                <div class="inline-flex items-center mr-4">
                                    <input class="form-radio text-indigo-600" type="radio" name="requiredPeriod" id="8-10-week" />
                                    <label class="ml-2" for="8-10-week">
                                        8-10 Weeks
                                    </label>
                                </div>

                                <div class="inline-flex items-center mr-4">
                                    <input class="form-radio text-indigo-600" type="radio" name="requiredPeriod" id="anytime" />
                                    <label class="ml-2" for="anytime">
                                        Anytime before Due Date
                                    </label>
                                </div>
                            </div>


                            <!-- personal information -->
                            <div class="step">
                                <div class="grid gap-4 md:grid-cols-2">
                                    <!-- given name -->
                                    <div class="col-span-1">
                                        <label for="givenName" class="block text-sm font-medium text-gray-700">Given Name</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="givenName" />
                                    </div>

                                    <!-- middle name -->
                                    <div class="col-span-1">
                                        <label for="middleName" class="block text-sm font-medium text-gray-700">Middle Name</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="middleName" />
                                    </div>

                                    <!-- surname -->
                                    <div class="col-span-1">
                                        <label for="surName" class="block text-sm font-medium text-gray-700">Surname</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="surName" />
                                    </div>

                                    <!-- date of birth -->
                                    <div class="col-span-1">
                                        <label for="birthDate" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                                        <input type="date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="birthDate" />
                                    </div>

                                    <!-- tax file number -->
                                    <div class="col-span-1">
                                        <label for="taxFileNumber" class="block text-sm font-medium text-gray-700">Tax File Number</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="taxFileNumber" />
                                    </div>

                                    <!-- occupation -->
                                    <div class="col-span-1">
                                        <label for="Occupation" class="block text-sm font-medium text-gray-700">Occupation</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="Occupation" />
                                    </div>

                                    <!-- address -->
                                    <div class="col-span-2">
                                        <label for="inputAddress" class="block text-sm font-medium text-gray-700">Address</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="inputAddress" />
                                    </div>

                                    <!-- home phone -->
                                    <div class="col-span-1">
                                        <label for="homePhone" class="block text-sm font-medium text-gray-700">Home Phone</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="homePhone" />
                                    </div>

                                    <!-- mobile -->
                                    <div class="col-span-1">
                                        <label for="mobile" class="block text-sm font-medium text-gray-700">Mobile</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="mobile" />
                                    </div>

                                    <!-- account name -->
                                    <div class="col-span-2">
                                        <label for="accountName" class="block text-sm font-medium text-gray-700">Account Name*</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="accountName" />
                                    </div>

                                    <!-- bank bsb number -->
                                    <div class="col-span-1">
                                        <label for="bankBsbNumber" class="block text-sm font-medium text-gray-700">Bank BSB Number*</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="bankBsbNumber" required />
                                    </div>

                                    <!-- bank acc number -->
                                    <div class="col-span-1">
                                        <label for="bankAccNumber" class="block text-sm font-medium text-gray-700">Bank ACC Number*</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="bankAccNumber" required />
                                    </div>

                                    <!-- email address -->
                                    <div class="col-span-2">
                                        <label for="emailAddress" class="block text-sm font-medium text-gray-700">Email Address</label>
                                        <input type="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="emailAddress" />
                                    </div>

                                    <!-- names of dependent children & DOB -->
                                    <div class="col-span-2 mt-2">
                                        <label class="block text-sm font-medium text-gray-700">
                                            Names of Dependent Children & D.O.B
                                        </label>

                                        <div id="childrenInput">
                                            <div class="mb-2 grid grid-cols-1 md:grid-cols-2 gap-2">
                                                <div>
                                                    <input type="text" name="childrenName[0]" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Children Name" />
                                                </div>

                                                <div>
                                                    <input type="date" name="childrenDob[0]" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                                                </div>
                                            </div>
                                        </div>

                                        <button id="add-children" class="mb-3 px-3 py-2 bg-blue-600 text-white text-sm font-medium rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" type="button">
                                            Add +
                                        </button>
                                    </div>

                                    <!-- name of spouse or partner & DOB -->
                                    <div class="col-span-2 mt-1">
                                        <label for="spousePartner" class="block text-sm font-medium text-gray-700">
                                            Name of Spouse or Partner & D.O.B (Includes same sex couples)*
                                        </label>
                                        <div class="mb-2 grid grid-cols-1 md:grid-cols-2 gap-2">
                                            <div>
                                                <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required />
                                            </div>

                                            <div>
                                                <input type="date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- COMPULSORY -->
                                    <div class="col-span-2">
                                        <p class="text-sm text-red-600">
                                            *COMPULSORY: Please supply spouse taxable income, include Reportable Fringe Benefits, Reportable Superannuation
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <!-- PAYG income summaries -->
                            <div class="mb-4 step">
    <label class="block mb-2 text-sm font-medium text-gray-700">
        Are You an Employee? (Including pensions)
    </label>

    <div class="inline-flex items-center mr-4">
        <input class="form-radio text-indigo-600" type="radio" name="anEmployee" id="anEmployeeYes" />
        <label class="ml-2" for="anEmployeeYes"> yes </label>
    </div>

    <div class="inline-flex items-center mr-4">
        <input class="form-radio text-indigo-600" type="radio" name="anEmployee" id="anEmployeeNo" />
        <label class="ml-2" for="anEmployeeNo"> No </label>
    </div>

    <p class="mt-2 text-sm text-gray-600">
        If yes, your PAYG income summaries from your employers will be
        available via the ATO portal or MY GOV
    </p>

    <label class="block mt-4 text-sm font-medium text-gray-700">
        OTHER INCOME (Includes any business income, director’s fee,
        commissions etc)
    </label>
    <textarea class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" rows="3"></textarea>
</div>


                            <!-- INTEREST RECEIVED & DIVIDENDS -->
                            <div class="mb-8">
    <!-- INTEREST RECEIVED -->
    <div class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-700">INTEREST RECEIVED</label>

        <table class="w-full border-collapse border border-gray-300 text-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border border-gray-300 px-2 py-1">NAME OF BANK</th>
                    <th class="border border-gray-300 px-2 py-1">ACCOUNT NUMBER</th>
                    <th class="border border-gray-300 px-2 py-1">TOTAL INTEREST RECEIVED $</th>
                    <th class="border border-gray-300 px-2 py-1">TFN WITHHOLDING $</th>
                    <th class="border border-gray-300 px-2 py-1">JOINT ACCOUNT?</th>
                </tr>
            </thead>
            <tbody id="interestReceivedTableBody">
                <!-- bank 1 -->
                <tr>
                    <td class="border border-gray-300 px-2 py-1">
                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" name="bankName[0]" />
                    </td>
                    <td class="border border-gray-300 px-2 py-1">
                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" name="accountNumber[0]" />
                    </td>
                    <td class="border border-gray-300 px-2 py-1">
                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" name="totalInterest[0]" />
                    </td>
                    <td class="border border-gray-300 px-2 py-1">
                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" name="tfnWithholding[0]" />
                    </td>
                    <td class="border border-gray-300 px-2 py-1">
                        <div class="flex justify-center items-center gap-1">
                            <input type="checkbox" class="form-checkbox text-indigo-600 rounded" name="jointAccount[0]" id="jointAccount[0]" />
                            <label for="jointAccount[0]" class="text-sm">Yes</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <button id="add-interest-row" class="mt-2 px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" type="button">
            Add +
        </button>
    </div>

    <!-- DIVIDENDS -->
    <div>
        <label class="block mb-2 text-sm font-medium text-gray-700">DIVIDENDS</label>
        <p class="mb-3 text-sm text-gray-600">
            <strong>Please provide copies of dividend statements of Income
                received,</strong>
            including Dividend Reinvestment Plans (DRP)
        </p>

        <table class="w-full border-collapse border border-gray-300 text-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border border-gray-300 px-2 py-1">NAME OF SHARES</th>
                    <th class="border border-gray-300 px-2 py-1">NUMBER OF SHARES HELD</th>
                    <th class="border border-gray-300 px-2 py-1">AMOUNT RECEIVED $</th>
                </tr>
            </thead>
            <tbody id="dividendsTableBody">
                <tr>
                    <td class="border border-gray-300 px-2 py-1">
                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" name="sharesName[0]" />
                    </td>
                    <td class="border border-gray-300 px-2 py-1">
                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" name="sharesNumber[0]" />
                    </td>
                    <td class="border border-gray-300 px-2 py-1">
                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" name="shareAmount[0]" />
                    </td>
                </tr>
            </tbody>
        </table>
        <button id="add-dividend-row" class="mt-2 px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" type="button">
            Add +
        </button>
    </div>
</div>


                            <!-- TRUST AND PARTNERSHIPS & CAPITAL GAIN -->
                            <div class="step">
    <!-- TRUST AND PARTNERSHIPS -->
    <div class="mb-5">
        <label class="block mb-1 font-semibold">
            TRUST AND PARTNERSHIPS
        </label>
        <p class="mb-2">
            (Eg: BT funds, Vanguard, AXA etc) Name of trust or partnership -
        </p>
        <p class="mb-2">
            Please provide <strong>Annual Tax Statements</strong>
        </p>
        <textarea class="form-control w-full border border-gray-300 p-2 rounded-md" name="" id=""></textarea>
    </div>

    <!-- CAPITAL GAIN -->
    <div>
        <label class="block mb-2 font-semibold">
            CAPITAL GAIN
        </label>
        <p class="mb-2">
            Did you sell any assets such as shares or property which were
            acquired after 20 September 1985?
        </p>

        <div class="mb-3">
            <div class="inline-block mr-4">
                <input class="form-check-input" type="radio" name="sellAssetAfter1985" id="sellAssetYes" />
                <label class="form-check-label" for="sellAssetYes">
                    Yes
                </label>
            </div>

            <div class="inline-block">
                <input class="form-check-input" type="radio" name="sellAssetAfter1985" id="sellAssetNo" />
                <label class="form-check-label" for="sellAssetNo"> No </label>
            </div>
        </div>

        <div>
            <p class="mb-2">
                If yes, please provide documentation of when it was
                purchased/cost and also documents on sale/funds received, etc.
            </p>
            <input class="form-control w-full border border-gray-300 p-2 rounded-md" type="file" id="formFileMultiple" multiple />
        </div>
    </div>
</div>


                            <!-- EMPLOYEE SHARE/OPTION SCHEME & ANY OTHER INCOME & assets over $50,000AUD -->
                            <div class="step">
    <!-- EMPLOYEE SHARE/OPTION SCHEME -->
    <div class="mb-4">
        <label class="block mb-1 font-semibold">
            EMPLOYEE SHARE/OPTION SCHEME
        </label>
        <p class="mb-2">
            Did you receive bonus shares/options from your current employer
            during 2023/2024?
        </p>

        <div class="mb-3">
            <div class="inline-block mr-4">
                <input class="form-check-input" type="radio" name="bonusSharesOptions" id="bonusSharesOptionsYes" />
                <label class="form-check-label" for="bonusSharesOptionsYes">
                    Yes
                </label>
            </div>

            <div class="inline-block">
                <input class="form-check-input" type="radio" name="bonusSharesOptions" id="bonusSharesOptionsNo" />
                <label class="form-check-label" for="bonusSharesOptionsNo">
                    No
                </label>
            </div>
        </div>

        <div>
            <p class="mb-2">
                If yes, please provide the related correspondences/documents
                received from the employer.
            </p>
            <input class="form-control w-full border border-gray-300 p-2 rounded-md" type="file" id="formFileMultiple" multiple />
        </div>
    </div>

    <!-- ANY OTHER INCOME -->
    <div class="mb-4">
        <label class="block mb-1 font-semibold">
            ANY OTHER INCOME
        </label>
        <p class="mb-2">
            (Any Income you have received in the financial year that does
            not fit into any of the above categories. Please provide
            details.)
            <strong>
                Eg. Interest on any overseas bank accounts or any other
                foreign income received.
            </strong>
        </p>
        <textarea class="form-control w-full border border-gray-300 p-2 rounded-md" name="" id=""></textarea>
    </div>

    <!-- assets over $50,000AUD -->
    <div>
        <label class="block mb-1 font-semibold">
            Do you have any assets over $50,000AUD outside of Australia?
        </label>

        <div class="mb-3">
            <div class="inline-block mr-4">
                <input class="form-check-input" type="radio" name="assetsOver50000" id="assetsOver50000Yes" />
                <label class="form-check-label" for="assetsOver50000Yes">
                    Yes
                </label>
            </div>

            <div class="inline-block">
                <input class="form-check-input" type="radio" name="assetsOver50000" id="assetsOver50000No" />
                <label class="form-check-label" for="assetsOver50000No">
                    No
                </label>
            </div>
        </div>
    </div>
</div>


                            <!-- DEDUCTIONS & MOTOR VEHICLE & WORK UNIFORM -->


                            <!-- SELF EDUCATION -->
                            <div class="step">
                                <h3 class="d-block mb-3">SELF EDUCATION</h3>

                                <!-- Name of Course -->
                                <div class="mb-2">
                                    <label for="nameOfCourse" class="form-label">Name of Course:</label>
                                    <input type="text" class="form-control" id="nameOfCourse" />
                                </div>

                                <!-- Institution -->
                                <div class="mb-2">
                                    <label for="institution" class="form-label">Institution:</label>
                                    <input type="text" class="form-control" id="institution" />
                                </div>

                                <!-- How does it relate to your current employment/employer? -->
                                <div class="mb-2">
                                    <label for="relateToCurrentEmployment" class="form-label">How does it relate to your current
                                        employment/employer?:</label>
                                    <textarea type="text" class="form-control" id="relateToCurrentEmployment">
              </textarea>
                                </div>

                                <!-- Fees (Excluding HECS/HELP debt) -->
                                <div class="mb-2">
                                    <label for="feesExcludingHecs" class="form-label">Fees (Excluding HECS/HELP debt):</label>
                                    <textarea type="text" class="form-control" id="feesExcludingHecs"></textarea>
                                </div>

                                <!-- Books/Stationery/Consumables -->
                                <div class="mb-2">
                                    <label for="booksStationeryConsumables" class="form-label">Books/Stationery/Consumables:</label>
                                    <input id="booksStationeryConsumables" type="text" class="form-control" />
                                </div>

                                <!-- Travel -->
                                <div class="mb-2">
                                    <label for="travel" class="form-label">Travel:</label>
                                    <input id="travel" type="text" class="form-control" />
                                </div>

                                <!-- Internet -->
                                <div class="mt-3 row g-3">
                                    <h5 class="col-12 mb-2">Internet</h5>

                                    <!-- Amount per month -->
                                    <div class="col-12 col-md-6">
                                        <label for="internetAmountPerMonth" class="form-label">Amount per month:</label>
                                        <input id="internetAmountPerMonth" type="text" class="form-control" />
                                    </div>

                                    <!-- Percentage used for work -->
                                    <div class="col-12 col-md-6">
                                        <label for="internetUsedForwork" class="form-label">Percentage used for work:</label>
                                        <input id="internetUsedForwork" type="text" class="form-control" />
                                    </div>
                                </div>

                                <!-- Home Office Hour -->
                                <div class="mt-3 row g-3">
                                    <h5 class="col-12 mb-2">Home Office Hour</h5>

                                    <!-- Hours per week -->
                                    <div class="col-12 col-md-6">
                                        <label for="homeOfficeHoursPerWeek" class="form-label">Hours per week:</label>
                                        <input id="homeOfficeHoursPerWeek" type="text" class="form-control" />
                                    </div>

                                    <!-- How many weeks -->
                                    <div class="col-12 col-md-6">
                                        <label for="homeOfficeHowManyWeeks" class="form-label">How many weeks:</label>
                                        <input id="homeOfficeHowManyWeeks" type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>

                            <!-- OTHER WORK RELATION DEDUCTIONS -->
                            <div class="step">
                                <h4 class="mb-3">OTHER WORK RELATION DEDUCTIONS</h4>
                                <div class="row g-3">
                                    <!-- Union fees/Professional bodies -->
                                    <div class="col-12">
                                        <label for="unionFees" class="form-label">Union fees/Professional bodies (list names and amount)</label>
                                        <input type="text" class="form-control" id="unionFees" />
                                    </div>

                                    <!-- Diary/Printing/Postage/Stationery  -->
                                    <div class="col-12">
                                        <label for="diaryPrintingPostageStationery" class="form-label">Diary/Printing/Postage/Stationery</label>
                                        <input type="text" class="form-control" id="diaryPrintingPostageStationery" />
                                    </div>

                                    <!-- Books and Journals  -->
                                    <div class="col-12">
                                        <label for="booksAndJournals" class="form-label">Books and Journals</label>
                                        <input type="text" class="form-control" id="booksAndJournals" />
                                    </div>

                                    <!-- Seminar Cost  -->
                                    <div class="col-12">
                                        <label for="seminarCost" class="form-label">Seminar Cost</label>
                                        <input type="text" class="form-control" id="seminarCost" />
                                    </div>

                                    <!-- Sickness and Accident Insurance/Income Protection  -->
                                    <div class="col-12">
                                        <label for="sicknessAccidentInsuranceIncomeProtection" class="form-label">Sickness and Accident
                                            Insurance/Income Protection (please
                                            supply a copy of the policy)</label>
                                        <input type="text" class="form-control" id="sicknessAccidentInsuranceIncomeProtection" />
                                    </div>

                                    <!-- Internet  -->
                                    <div class="col-12 mt-3">
                                        <label class="form-label">Internet</label>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="otherInternetAmountPerMonth" class="form-label">Amount per month</label>
                                        <input type="text" class="form-control" id="otherInternetAmountPerMonth" />
                                    </div>

                                    <div class="col-md-6">
                                        <label for="otherInternetPercentageUsedForWork" class="form-label">Percentage used for work</label>
                                        <input type="text" class="form-control" id="otherInternetPercentageUsedForWork" />
                                    </div>
                                    <!-- internet end  -->

                                    <!-- Home office hours  -->
                                    <div class="col-12 mt-3 mb-0">
                                        <label class="form-label mb-0">Home Office Hours From 01/07/2023 to 30/06/2024</label>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="otherWorkHoursPerWeek" class="form-label">Hours Per Week</label>
                                        <input type="text" class="form-control" id="otherWorkHoursPerWeek" />
                                    </div>

                                    <div class="col-md-6">
                                        <label for="otherHowManyWeeks " class="form-label">How many weeks
                                        </label>
                                        <input type="text" class="form-control" id="otherHowManyWeeks " />
                                    </div>
                                    <!-- Home office hours end  -->

                                    <!-- Mobile Phone  -->
                                    <div class="col-12 mt-3 mb-0">
                                        <label class="form-label mb-0">Mobile Phone</label>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="otherMobilePhoneAmountPerMonth" class="form-label">Amount per month</label>
                                        <input type="text" class="form-control" id="otherMobilePhoneAmountPerMonth" />
                                    </div>

                                    <div class="col-md-6">
                                        <label for="otherMobilePhonePercentageUsedForWork" class="form-label">Percentage used for work</label>
                                        <input type="text" class="form-control" id="otherMobilePhonePercentageUsedForWork" />
                                    </div>
                                    <!-- Mobile Phone end  -->

                                    <!-- Outdoor workers  -->
                                    <div class="col-12 mt-2 mb-0">
                                        <label class="form-label mb-0">Outdoor workers</label>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="otherOutDoorWorkerAmountPerMonth" class="form-label">Amount</label>
                                        <input type="text" class="form-control" id="otherOutDoorWorkerAmountPerMonth" />
                                    </div>

                                    <div class="col-md-6">
                                        <label for="otherOutdoorWorkerPercentageUsedForWork" class="form-label">Percentage used for work</label>
                                        <input type="text" class="form-control" id="otherOutdoorWorkerPercentageUsedForWork" />
                                    </div>
                                    <!-- Outdoor workers  -->

                                    <!-- Tools & Equipment-Over -->
                                    <div class="col-12">
                                        <label for="toolsAndEquipment" class="form-label">
                                            Tools & Equipment-Over $300 (List dates & percentage used or
                                            work purpose)
                                        </label>
                                        <input type="text" class="form-control" id="toolsAndEquipment" />
                                    </div>
                                </div>
                            </div>

                            <!-- OTHER & GIFTS OR DONATIONS -->
                            <div class="step">
                                <!-- OTHER -->
                                <div class="mb-4">
                                    <label class=" d-block mb-2"> OTHER </label>

                                    <p class="mb-2">
                                        (Costs you incurred that was directly related to your job.)
                                        Please provide details:
                                    </p>

                                    <input class="form-control" type="text" />

                                    <p class="mb-2">Income Protection Insurance</p>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="incomeProtectionInsurance" id="incomeProtectionInsuranceYes" />
                                        <label class="form-check-label" for="incomeProtectionInsuranceYes">
                                            yes
                                        </label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="incomeProtectionInsurance" id="incomeProtectionInsuranceNo" />
                                        <label class="form-check-label" for="incomeProtectionInsuranceNo">
                                            No
                                        </label>
                                    </div>

                                    <p class="mt-2">If yes, how much did you pay $</p>

                                    <input type="text" class="form-control mb-3" />
                                </div>

                                <!-- GIFTS OR DONATIONS -->
                                <div class="mb-4">
                                    <label class=" d-block mb-2">
                                        GIFTS OR DONATIONS
                                    </label>

                                    <p class="mb-2">
                                        Voluntary gifts of $2 of more made to a Deductible Gift
                                        Recipient (DGR) Status Organization, please list the name of the
                                        organistaion and the amount donated. (This includes School
                                        Building Fund donations)
                                    </p>

                                    <textarea class="form-control" name="" id=""></textarea>
                                </div>

                            </div>

                            <!-- TAX OFFSETS -->
                            <div class="step">
                                <div class="mb-4">
                                    <h4 class=" d-block mb-3"> TAX OFFSETS </h4>

                                    <!-- PRIVATE HEALTH INSURANCE -->
                                    <div class="mt-3">
                                        <h6 class="mb-2">
                                            PRIVATE HEALTH INSURANCE
                                        </h6>

                                        <div class="mb-2">
                                            <p>
                                                Do you have private health Insurance?
                                            </p>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="privateHealthInsurance" id="privateHealthInsuranceYes" />
                                                <label class="form-check-label" for="privateHealthInsuranceYes"> yes </label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="privateHealthInsurance" id="privateHealthInsuranceNo" />
                                                <label class="form-check-label" for="privateHealthInsuranceNo"> No </label>
                                            </div>

                                        </div>

                                        <div class="mb-2">
                                            <p>
                                                Please confirm all your family members (including your spouse and children were covered by private
                                                health insurance hospital cover)
                                            </p>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="allPrivateHealthInsurance" id="allPrivateHealthInsuranceYes" />
                                                <label class="form-check-label" for="allPrivateHealthInsuranceYes"> yes </label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="allPrivateHealthInsurance" id="allPrivateHealthInsuranceNo" />
                                                <label class="form-check-label" for="allPrivateHealthInsuranceNo"> No </label>
                                            </div>

                                        </div>

                                    </div>

                                    <!-- PRIVATE HEALTH INSURANCE -->
                                    <div class="mt-3">
                                        <h6 class="mb-2">
                                            SPOUSE OR PARTNERS TAXABLE INCOME*
                                        </h6>
                                        <p class="mb-2">(Includes same sex couples)</p>

                                        <div class="mb-2">
                                            <p>
                                                Did you have a spouse/partner for the full financial year?
                                            </p>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="spousePartnerForYear" id="spousePartnerForYearYes" />
                                                <label class="form-check-label" for="spousePartnerForYearYes"> yes </label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="spousePartnerForYear" id="spousePartnerForYearNo" />
                                                <label class="form-check-label" for="spousePartnerForYearNo"> No </label>
                                            </div>

                                        </div>

                                        <div class="mb-2">
                                            <p>
                                                Does your spouse/partner receive any benefits from Centrelink?
                                            </p>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="spoucepartnerBenefitsFromCentrelink" id="spoucepartnerBenefitsFromCentrelinkYes" />
                                                <label class="form-check-label" for="spoucepartnerBenefitsFromCentrelinkYes"> yes </label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="spoucepartnerBenefitsFromCentrelink" id="spoucepartnerBenefitsFromCentrelinkNo" />
                                                <label class="form-check-label" for="spoucepartnerBenefitsFromCentrelinkNo"> No </label>
                                            </div>

                                        </div>

                                        <!-- What was your spouse or partner’s taxable income* -->
                                        <div class="mb-2">
                                            <label for="nameOfCourse" class="form-label">What was your spouse or partner’s taxable income*:</label>
                                            <input type="text" class="form-control" required />
                                        </div>

                                        <p><strong>(Please supply a copy of their PAYG Summary/Group certificate)</strong></p>

                                    </div>


                                </div>



                            </div>

                            <!-- SUPERANNUATION & OTHER -->
                            <div class="step">
                                <div class="mb-4">
                                    <!-- SUPERANNUATION -->
                                    <div class="mb-2">
                                        <h4 class=" d-block mb-3">SUPERANNUATION</h4>

                                        <div class="mb-3">
                                            <p class="mb-2">
                                                a) Please provide details of contributions you made to your superannuation for the financial year, if
                                                any.
                                            </p>

                                            <textarea class="form-control" name="" id=""></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <p class="mb-2">
                                                b) Have you made superannuation contributions on behalf of your spouse?
                                            </p>

                                            <textarea class="form-control" name="" id=""></textarea>
                                        </div>

                                    </div>

                                    <!-- OTHER -->
                                    <div class="mb-2">
                                        <h4 class=" d-block mb-3">OTHER</h4>

                                        <div class="mb-3">
                                            <p class="mb-2">
                                                Any other information that we should be aware of: i.e. you are not entitled to Medicare Benefit, you
                                                are a student etc.
                                            </p>

                                            <textarea class="form-control" name="" id=""></textarea>
                                        </div>
                                    </div>

                                </div>



                            </div>

                            <!-- last step -->
                            <div class="step">
                                <div class="mb-4">

                                    <p class=" d-block mb-3 text-center lead">
                                        Only rents received and expenses <strong>paid</strong> between 1 July 2022 and 30 June 202
                                    </p>

                                    <div class="mb-3">
                                        <table class="table table-bordered table-sm">
                                            <tbody>
                                                <tr>
                                                    <th>
                                                        Owner Names & Ownership %:
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        Address of Rental Property:
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        Number of weeks property was rented this year:
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- INCOME -->
                                    <div class="mb-3">
                                        <h5 class="mb-2">
                                            INCOME
                                        </h5>

                                        <table class="table table-responsive table-bordered table-sm">
                                            <tbody>
                                                <tr class="p-1">
                                                    <th>
                                                        Gross rental income
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        Other rental related income
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        Gross Rent
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- EXPENSES -->
                                    <div class="mb-3">
                                        <h5 class="mb-2">
                                            EXPENSES
                                        </h5>

                                        <table class="table table-responsive table-bordered table-sm">
                                            <tbody>
                                                <tr class="p-1">
                                                    <th class="mw-fit">
                                                        D Advertising for tenants
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="mw-fit">
                                                        E Body corporate fees (Strata Levies)
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="mw-fit">
                                                        F Borrowing expenses
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="mw-fit">
                                                        G Cleaning
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="mw-fit">
                                                        H Council Rates
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="mw-fit">
                                                        I Capital allowances (depreciation)
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="mw-fit">
                                                        J Gardening/lawn mowing
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="mw-fit">
                                                        K Insurance
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="mw-fit">
                                                        L Interest on loans
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="mw-fit">
                                                        M Land Tax
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="mw-fit">
                                                        N Legal fees
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="mw-fit">
                                                        O Pest control
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="mw-fit">
                                                        P Property agent fees/commission
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="mw-fit">
                                                        Q Repairs and maintenance (R & M)
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="mw-fit">
                                                        (for R & M purchases greater than $300 need details)
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="mw-fit">
                                                        R Capital Work’s Deduction (Building)
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="mw-fit">
                                                        S Stationery, telephone and postage
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="mw-fit">
                                                        T Travel expenses (Not allowed after 30/6/2017)
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="mw-fit">
                                                        U Water charges
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="mw-fit">
                                                        V Sundry rental expenses
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="mw-fit">
                                                        TOTAL EXPENSES
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- NET RENT -->
                                    <div class="mb-3">
                                        <table class="table table-responsive table-bordered table-sm">
                                            <tbody>
                                                <tr class="p-1">
                                                    <th>
                                                        NET RENT
                                                    </th>
                                                    <td>
                                                        <input type="text" class="form-control" />
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- NET RENT -->
                                    <div class="mb-3">
                                        <h6 class="mb-3">
                                            Note new rules on depreciation claims apply on signing of contracts as of 9/5/17 7.30pm
                                        </h6>
                                        <h5 class="mb-2">
                                            For property purchased this financial year please provide the following:
                                        </h5>
                                        <table class="table table-responsive table-bordered table-sm">
                                            <tbody>
                                                <tr>
                                                    <th>
                                                        Settlement Sheet
                                                    </th>
                                                    <td>
                                                        <input type="file" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        Bank Loan Offer
                                                    </th>
                                                    <td>
                                                        <input type="file" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        First Bank Statement
                                                    </th>
                                                    <td>
                                                        <input type="file" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        Transfer Title Documents
                                                    </th>
                                                    <td>
                                                        <input type="file" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        First Page Of The Contract For Sale
                                                    </th>
                                                    <td>
                                                        <input type="file" class="form-control" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        Depreciation Schedule (if any)
                                                    </th>
                                                    <td>
                                                        <input type="file" class="form-control" />
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>



                                </div>



                            </div>



                            <!-- Buttons -->
                            <div class="mt-5 d-flex flex-row gap-2 justify-content-center">
                                <button class="btn btn-lg btn-primary" type="button" onclick="prevStep()" id="prevBtn">
                                    Previous
                                </button>
                                <button class="btn btn-lg btn-primary" type="button" onclick="nextStep()" id="nextBtn">
                                    Next
                                </button>
                                <button class="btn btn-lg btn-success" type="submit" id="submitBtn" style="display: none">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </main>

            </div>
        </div>
    </div>
</x-app-admin-layout>
