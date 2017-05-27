<?php include_once('head.php') ?>   
<?php include_once('privy.php') ?>   
    <body id="healthguide-page">
        <?php include_once('header.php') ?>
            <div class="container">
                <div class="row guide">
                    <div class="title">
                        <h2>When You Should Buy Health Insurance</h2>
                    </div>
                    <div class="about">
                        <p>
                        Well, it's currently mandatory that everyone has to have health insurance, unless you qualify for a hardship exemption. And even if it wasn't mandatory, the cost for paying for health insurance is seriously lower than paying for the entire thing out-of-pocket. Don't believe us? Check out a sample “Out-of-pocket” bill.
                         </p>                            
                        <h5>So what are these Enrollment Periods?</h5>
                        <p>Enrollment starts on November 1, 2016 and ended on January 31, 2017. So unfortunately if you're reading this, that means you can only enroll through special enrollment periods, which are open typically on the day of a qualifying event and ends 60 days after that event.</p>
                        
                        <h5>So what should I focus on?</h5>
                         
                         
                        <h5>For Families</h5>
                        <p>Family plans are much better options than individual plans for each family member. Any child can keep that insurance until 26, even if they're married, living on their own, attending school, financially independent, and can enroll on their own plan. (Note this is for as long as the ACA stays in place)
                            Generally speaking, there are two deductibles in family plans, the family and individual deductible. Any payments to any health providers goes towards that individual's deductible as well as the family's deductible. And like all deductibles, once it's met, then the insurance carrier begins to pay their part.
                            And once the family deductible has been met, that means every member of the family has met their deductible, regardless if their own individual deductible hasn't been paid yet.
                            An example would be a 4 person family, their individual deductible is $2,000 but the family deductible is $5,000. Let's say one of the children has a medical bill of $5,000. The son would've met his personal deductible of $2,000, but now every member has met their deductible. So if the other child needed to go to the hospital, all the family would have to pay is the copayment or coinsurance.
                        </p>
                        <h5>For Young Adults</h5>
                        <p>This means if you're under 26, we'd say the best bet is to stay on your family's health insurance plan. If not, and you are a student, universities tend to have affordable health care options.</p>
                         
                        <h5>For Self-Employed</h5>
                        <p>Personal plans are all that are needed to satisfy the requirement of having health insurance. However, COBRA allows you to continue your old employer's health plan. As long as you were a full-time employee and had a W2, and met the requirements for COBRA to turn on. However, there are times where it is actually more expensive to continue your previous employer's health plan rather than getting an individual policy.</p>
                         
                        <h5>For Low Income Earners</h5>
                        <p>If you qualify for Medicaid (or your state's variation of Medicaid), you may be entitled too much cheaper premiums because of tax breaks and subsidies. Generally speaking if it's between 100% - 400% below the federal poverty line, you will receive government help in health insurance.</p>
                         
                        <h5>For Veterans</h5>
                        <p>We recommend going through the Veterans Affairs office, the VA covers all of the required health insurance benefits. You can always get additional coverage if you feel there are some gaps in the coverage. As the VA medical benefits do not provide any of the following services:</p>
                        <p>- Abortions and abortion counseling</p>
                        <p>- Cosmetic Surgery except when determined by the VA to be medically necessary for reconstructive or psychiatric care</p>
                        <p>- Drugs, biologicals, and medical devices not approved by the FDA</p>
                        <p>- Gender alteration</p>
                        <p>- In vitro fertilization</p>
                        <p>- Special private duty nursing</p>
                        <p>- Hospital and outpatient care for a veteran who is either a patient or inmate in an institution of another government agency if that agency has a duty to give that care or service</p>
                        <p>- Services not ordered and provided by licensed/accredited professional staff</p>
                         
                        <h5>For Active Duty</h5>
                        <p>You're covered by TRICARE, and do not need to purchase additional health insurance, however you can still do it as an optional benefit if you believe there is a lack of coverage with TRICARE.</p>
                         
                        <h5>For Senior Citizens</h5>
                        <p>If you're above the age of 65, you're probably looking for Medicare. Which is the government helping to pay for some of the rising cost of medicine and treatments as people age.
                            Medicare does not cover long term care, and neither does regular health insurance. Long term care has its own type of insurance. </p> 
                    </div>
                </div>
            </div>
            <div class="get-started fluid" style="clear:both;">
                <div class="container">
                    <div class="row">
                        <form name="" id="myForm">
                            <select name="menu" id="menu">
                                <option value="/life.php" selected="selected">Life Insurance</option>
                                <option value="" data-popup-open="popup-1">Health Insurance</option>
                                <option value="" data-popup-open="popup-1">Home Insurance</option>
                                <option value="" data-popup-open="popup-1">Auto Insurance</option>
                                <option value="" data-popup-open="popup-1">Disability Insurance</option>
                            </select>
                            <button type="button" onClick="getStarted();" class="buttonSpl getStarted btn">Get Started</button>
                        </form>                 
                    </div>
                </div>
            </div>
        <!-- services popup -->
        <div class="popup" data-popup="popup-1">
            <div class="popup-inner">
                <h2 style="">We're Only Offering <u>Life Insurance</u> Quotes at this Time.</h2>
                <h5 style="color:gray;">Let's Refer You to One of Our Partners.</h5>
                <p>
                    Although we're only offering life insurance at this time, you can head over to one of our trusted partners to get a quote.
                    By clicking 'Leave Site' we'll forward you to their website to get the quote. By pressing 'Stay Here' we'll take you back to our site.
                    <div>
                    <button class="btn btn-warning btn-lg" data-popup-close="popup-1">Stay Here</button>    
                    <button class="btn btn-default btn-lg">Leave Site</button>
                    </div>
                </p>
                <a class="popup-close" data-popup-close="popup-1" href="#" style="color:white;">x</a>
            </div>
        </div>          
<?php include_once('footer.php') ?>

