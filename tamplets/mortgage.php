
        <div class="mortgage-calc">
            <div class="container">
                <div class="mortgage-calc-wrapper">
                    <div class="row">
                        <div class="col-md-12 col-lg-4 col-sm-12">
                            <div class="calc-left-side shadow">
                                
                                <h3>Enter your details</h3>

                                <!-- mortgage type -->

                                <div class="mortgage-type">
                                    <div class="tool-tip-container">
                                        <span class="text-left label">What are you looking for ?</span>
                                        <span class="tool-tip">
                                            <span class="text-right" id="toolTipOne">i</span>
                                            <p class="tool-tip-content" id="tooTipContentOne">
                                                New mortgage: find your first mortgage, or an additional
                                            mortgage for another property.
                                                <br>
                                                <br>
                                                Remortgage: see if you can get a better rate, or borrow
                                            more, on a mortgage you already have.
                                            </p>
                                        </span>
                                    </div>
                                    <div class="mortgage-type-selector">
                                        <div class="form-check-inline">

                                            <div class="button-holder mr">
                                                <input class="form-check-input radio" type="radio" name="inlineRadioOptions" id="newMortgage" value="newMortgage" checked>
                                                <label class="form-check-label" for="newMortgage">New Mortgage</label>
                                            </div>
                                           
                                          </div>
                                          <div class=" form-check-inline">
                                              <div class="button-holder">
                                                <input class="form-check-input radio" type="radio" name="inlineRadioOptions" id="reMortgage" value="reMortgage">
                                                <label class="form-check-label" for="reMortgage">Remortgage</label>
                                              </div>
                                           
                                          </div>    
                                    </div>
                                </div>

                                <!-- Income input area  -->

                                <div class="income">
                                    <div class="tool-tip-container">
                                        <span class="text-left label">What's your income ?</span>
                                        <span class="tool-tip">
                                            <span class="text-right" id="toolTipTwo">i</span>
                                            <p class="tool-tip-content" id="tooTipContentTwo">
                                                If you’re applying with someone else, include theirs too. This means all types of income you get in a year: from bonuses, to overtime, to rental income.
                                                
                                            </p>
                                        </span>
                                    </div>
                                    <div class="income-input">
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text" id="inputGroup-sizing-lg">£</span>
                                            <input type="text" id="income" class="form-control" value="40000">
                                          </div>
                                          
                                    </div>
                                </div>

                                <!-- Deposit area  -->

                                <div class="deposit">
                                    <div class="tool-tip-container">
                                        <span class="text-left label">How much is your deposit ?</span>
                                        <span class="tool-tip">
                                            <span class="text-right" id="toolTipTwo">i</span>
                                            <p class="tool-tip-content" id="tooTipContentTwo">
                                                The amount you have saved for deposit.
                                            </p>
                                        </span>
                                    </div>
                                    <div class="deposit-input">
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text" id="inputGroup-sizing-lg">£</span>
                                            <input type="text" id="homedeposit" class="form-control" value="20000">
                                          </div>
                                    </div>
                                </div>

                                <!-- Rate type -->
                                <div class="rate-type">
                                    <div class="tool-tip-container">
                                        <span class="text-left label">Rate type</span>
                                        <span class="tool-tip">
                                            <span class="text-right" id="toolTipOne">i</span>
                                            <p class="tool-tip-content" id="tooTipContentOne">
                                                Fixed rate: your interest rate (which affects what you pay each month) is guaranteed over a fixed period of time, and won’t change.
                                                <br>
                                                <br>
                                                Variable rate: your interest rate could go up or down, so what you pay each month could change. During the initial period, you get a discount on your variable rate.
                                            </p>
                                        </span>
                                    </div>
                                    <div class="rate-type-selector">
                                        <div class="form-check-inline">

                                            <div class="button-holder mr">
                                                <input class="form-check-input radio" type="radio" name="rateType" id="fixed" value="fixed" checked >
                                                <label class="form-check-label" for="fixed">Fixed</label>
                                            </div>
                                           
                                          </div>
                                          <div class=" form-check-inline">
                                              <div class="button-holder">
                                                <input class="form-check-input radio" type="radio" name="rateType" id="variable" value="variable">
                                                <label class="form-check-label" for="variable">Variable</label>
                                              </div>
                                           
                                          </div>    
                                    </div>
                                </div>

                                <!-- Initial Period  -->
                                <div class="initial-period">
                                    <div class="tool-tip-container">
                                        <span class="text-left label">Inital period (years)</span>
                                        <span class="tool-tip">
                                            <span class="text-right" id="toolTipOne">i</span>
                                            <p class="tool-tip-content" id="tooTipContentOne">
                                                For the first few years of your mortgage, you’ll get a lower than standard interest rate. Think of it like an introductory offer from your lender. You can set how long this lasts here.
                            
                                            </p>
                                        </span>
                                    </div>
                                    <div class="period-selector">
                                        <div class="form-check-inline">

                                            <div class="button-holder">
                                                <input class="form-check-input radio" type="radio" name="period" id="periodTwo" value="2" checked>
                                                <label class="form-check-label" for="periodTwo">2</label>
                                            </div>
                                           
                                          </div>
                                          <div class=" form-check-inline">
                                              <div class="button-holder">
                                                <input class="form-check-input radio" type="radio" name="period" id="periodThree" value="3">
                                                <label class="form-check-label" for="periodThree">3</label>
                                              </div>
                                           
                                          </div>    
                                          <div class="form-check-inline">

                                            <div class="button-holder">
                                                <input class="form-check-input radio" type="radio" name="period" id="periodFour" value="4" >
                                                <label class="form-check-label" for="periodFour">4</label>
                                            </div>
                                           
                                          </div>
                                          <div class=" form-check-inline">
                                              <div class="button-holder">
                                                <input class="form-check-input radio" type="radio" name="period" id="periodFive" value="5">
                                                <label class="form-check-label" for="periodFive">5</label>
                                              </div>
                                           
                                          </div> 
                                    </div>
                                </div>

                                <!-- mortgage term -->
                                <div class="mortgage-term">
                                    <div class="tool-tip-container">
                                        <span class="text-left label">Mortgage term</span>
                                        <span class="tool-tip">
                                            <span class="text-right" id="toolTipTwo">i</span>
                                            <p class="tool-tip-content" id="tooTipContentTwo">
                                                The total length of your loan – how many years you’ll take to pay back your mortgage.
                                            </p>
                                        </span>
                                    </div>
                                    <div class="year-input">
                                        <div class="input-group input-group-lg">
                                            <input type="text" class="form-control" value="25" id="term">
                                            <span class="input-group-text" id="basic-addon2">Years</span>
                                          </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <!-- output -->

                        <div class="col-md-12 col-lg-8 col-sm-12">
                            <div class="mortgage-out-put shadow">
                                <h3 class="text-center">You may borrow maximum of</h3>
                                <h1 class="output text-center">£<span id="output">124411</span></h1>
                                <h4 class="total-amount-des text-center">
                                    This means, with your deposit, you can get a home worth 
                                </h4>
                                <h4 class="total-amout text-center">£<span id="totalAmount">124411</h4>
                                
                                <div class="next-step text-center">
                                    <p><b>
                                        Next Step 
                                        <br>
                                        Application is fast and no obligation. No Fees.
                                    </b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
