	<div class="borrow-calc">
		<div class="container">
			<div class="calc-wrapper">
				<div class="row">
					<div class="col-md-6">
						<h5>Find Out How Much You Can Borrow</h5>
	
						<!-- Property Value  -->
	
						<div class="form calc">
							<label class="form-label"> Property Value</label>
							<div class="input-group-lg input-group mb-5">
								<span class="input-group-text" id="">£</span>
								<input type="text" id="propertyValueOutput" class="form-control" readonly />
							</div>
	
	
	
							<!-- slider -->
							<input type="text" id="propertyValue" />
	
							<!-- Rental Income  -->
							<label class="form-label">Rental income (monthly) </label>
							<div class="input-group-lg input-group mb-5">
								<span class="input-group-text" id="">£</span>
								<input type="text" id="rentalIncomeValueOutput" class="form-control" readonly />
							</div>
							<input type="text" id="rentalIncome" />
						</div>
					</div>
					<div class="col-md-6">
	
						<!-- output  -->
	
						<div class="borrow-output">
							<p>Borrow up to:</p>
							<h2>£ <span id="borrowAmount">0</span></h2>
							<p>Buying? Budget £ <span id="stampDuty">0</span> extra for stamp duty.</p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<div class="mortgage-cost-calc">
		<div class="container">
			<div class="calc-wrapper">
				<div class="row">
					<div class="col-md-6">
						<h5>See your monthly mortgage cost</h5>
	
						<!-- Deposit  -->
	
						<div class="form calc">
							<label class="form-label"> Deposit
							</label>
							<div class="input-group-lg input-group mb-5">
								<span class="input-group-text" id="">£</span>
								<input type="text" id="depositOutput" class="form-control" readonly />
							</div>
	
	
	
							<!-- slider -->
							<input type="text" id="deposit" />
	
							<!-- Interest rate  -->
							<label class="form-label">Interest rate (%)
							</label>
							<div class="input-group-lg input-group mb-5">
								<span class="input-group-text" id="">£</span>
								<input type="text" id="interestRateOutput" class="form-control" readonly />
							</div>

							<!-- slider -->
							<input type="text" id="intslider" />
						</div>
					</div>
					<div class="col-md-6">
	
						<!-- output  -->
	
						<div class="interest-output">
							<p>Interest only:</p>
							<h2>£ <span id="intAmount">0</span>/month</h2>
							<p>Loan to value (LTV):<span id="ltv"> 0</span> %</p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>


