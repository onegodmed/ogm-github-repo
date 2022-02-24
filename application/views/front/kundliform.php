<style>
   .register-left {
   text-align: center;
   color: #fff;
   margin-top: 12%;
   height: 100%;
   }
   .bdate, .bmonth, .byear, .bhh, .bmm, .bss, .gdate, .gmonth, .gyear, .ghh, .gmm, .gss, .date, .month, .year, .hh, .mm, .ss{width:30%;height:34px;}
   .d-flex{display:flex;} 
   .align-items-center{align-items:center;} 
   .justify-content-between{justify-content:space-between;}
   select#ctryCode {
   border: none;
   position: absolute;
   top: 31px;
   left: 7px;
   background: transparent;
   }
   .switcher {
   display: block;}
   .page_title h1 {
   float: left;
   width: 100%;
   color: #fff;
   margin: 0;
   font-size: 36px;
   text-transform: capitalize;
   }
</style>
<div class="ast_about_wrapper ast_toppadder70 ast_bottompadder70">
   <div class="container">
                  <div class="row">
                     <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                        <div class="ast_heading dis">
                           <h1>Free Kundali</h1>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-3 kundali-img">
                        <img src="<?php echo base_url(); ?>front-assets/images/kundali-detail.png" alt="" />
                        
                     </div>
                     <div class="col-md-9 col-sm-9">
                        <div class="k-description">
                           <p>JanamKundli or horoscope or birth chart is an astrological chart which shows the exact position of the planets at the time of your birth. Kundalior horoscope is a very important document for every person by which he/she can predictthe futureand understand lot of things.
                           
                           </p>
                           <p>
                           Online Kundli is easy to create. By using/submitting your exact birth details in our free kundli software you can generate free kundli or horoscope which will contain all the basic information like Birth chart which shows the 12 rashi (sign) 
                           and the position of planets in each rashi (sign), Manglik dosh, Kalsarpdosha, Vimshottaridasha, Antardashaetc..
                           To generate your Janamkundli, enter your birth date & time and place of birth in the form given below:
                           </p>
                          
                           <div class="trynow">
                              <a href="#kundali-form">
                                 <img src="<?php echo base_url(); ?>front-assets/images/TRY-NOW-ICON.png" alt="" />
                              </a>
                           </div>
                        </div>
                     </div>


                     <div class="col-md-12 Freekundali">
                        <h3 class="title-bg">
                           <p>Get Your Free Kundali</p>
                        </h3>
                        <div class="col-md-7 form-field form-shadow kundali-form" id="kundali-form">
                           <form >
                                 <div class="mtb name">
                                       <div class="col-md-8 col-xs-8">
                                          <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" id="name" placeholder="Full Name">
                                             </div>
                                       </div>
                                       <div class="col-md-4 col-xs-4">
                                                <div class="form-group">
                                                   <label>Gender</label>
                                                   <select name="gender" id="gender">
                                                   <option value="">Gender</option>
                                                   <option value="Male" id="Male">Male</option>
                                                   <option value="Female" id="Female">Female</option>
                                                   </select>
                                          </div>
                                       </div>
                                 </div>
                                 <div class="dob mtb">
                                       <label class="col-md-12">Date of Birth</label>
                                          <div class="col-md-4 col-xs-4">
                                             <select class="kundli_match_select valid" data-val="true" data-val-required="Date*" id="Date" name="Date"  aria-describedby="Date-error" aria-invalid="false"><option value="">Date</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                                </select>
                                          </div>
                                          <div class="col-md-4 col-xs-4">
                                             <select class="kundli_match_select valid" data-val="true" data-val-required="Month*" id="Month" name="Month"><option value="">Month</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                </select>
                                          </div>
                                          <div class="col-md-4 col-xs-4">
                                             <select class="kundli_match_select valid" data-val="true" data-val-required="Year*" id="Year" name="Year" ><option value="">Year</option>
                                                <option value="1945">1945</option>
                                                <option value="1946">1946</option>
                                                <option value="1947">1947</option>
                                                <option value="1948">1948</option>
                                                <option value="1949">1949</option>
                                                <option value="1950">1950</option>
                                                <option value="1951">1951</option>
                                                <option value="1952">1952</option>
                                                <option value="1953">1953</option>
                                                <option value="1954">1954</option>
                                                <option value="1955">1955</option>
                                                <option value="1956">1956</option>
                                                <option value="1957">1957</option>
                                                <option value="1958">1958</option>
                                                <option value="1959">1959</option>
                                                <option value="1960">1960</option>
                                                <option value="1961">1961</option>
                                                <option value="1962">1962</option>
                                                <option value="1963">1963</option>
                                                <option value="1964">1964</option>
                                                <option value="1965">1965</option>
                                                <option value="1966">1966</option>
                                                <option value="1967">1967</option>
                                                <option value="1968">1968</option>
                                                <option value="1969">1969</option>
                                                <option value="1970">1970</option>
                                                <option value="1971">1971</option>
                                                <option value="1972">1972</option>
                                                <option value="1973">1973</option>
                                                <option value="1974">1974</option>
                                                <option value="1975">1975</option>
                                                <option value="1976">1976</option>
                                                <option value="1977">1977</option>
                                                <option value="1978">1978</option>
                                                <option value="1979">1979</option>
                                                <option value="1980">1980</option>
                                                <option value="1981">1981</option>
                                                <option value="1982">1982</option>
                                                <option value="1983">1983</option>
                                                <option value="1984">1984</option>
                                                <option value="1985">1985</option>
                                                <option value="1986">1986</option>
                                                <option value="1987">1987</option>
                                                <option value="1988">1988</option>
                                                <option value="1989">1989</option>
                                                <option value="1990">1990</option>
                                                <option value="1991">1991</option>
                                                <option value="1992">1992</option>
                                                <option value="1993">1993</option>
                                                <option value="1994">1994</option>
                                                <option value="1995">1995</option>
                                                <option value="1996">1996</option>
                                                <option value="1997">1997</option>
                                                <option value="1998">1998</option>
                                                <option value="1999">1999</option>
                                                <option value="2000">2000</option>
                                                <option value="2001">2001</option>
                                                <option value="2002">2002</option>
                                                <option value="2003">2003</option>
                                                <option value="2004">2004</option>
                                                <option value="2005">2005</option>
                                                <option value="2006">2006</option>
                                                <option value="2007">2007</option>
                                                <option value="2008">2008</option>
                                                <option value="2009">2009</option>
                                                <option value="2010">2010</option>
                                                <option value="2011">2011</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                </select>
                                          </div>
                                 </div>
                                 <div class="birthtime mtb">
                                    <label class="col-md-12">Birth Time</label>
                                    <div class="col-md-4 col-xs-4">
                                          <select class="kundli_match_select valid" data-val-required="hour required" data-val="true" data-val-range="Hour*" data-val-range-max="12" data-val-range-min="1" id="Kund_F_BirthPlace_Hour" name="Kund_F_BirthPlace_Hour" aria-describedby="Kund_F_BirthPlace_Hour-error" aria-invalid="false">
                                             <option>Hour</option>
                                             <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
                                             <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
                                             <option>11</option><option>12</option>
                                          </select>
                                    </div>
                                    <div class="col-md-4 col-xs-4">
                                          <select class="kundli_match_select valid" placeholder="houes" data-val="true" data-val-range="Minute*" data-val-range-max="59" data-val-range-min="0" id="Kund_F_BirthPlace_Minute" name="Kund_F_BirthPlace_Minute" aria-describedby="Kund_F_BirthPlace_Minute-error" aria-invalid="false">
                                             <option>Minute</option>
                                             <option>00</option><option>01</option><option>02</option><option>03</option><option>04</option>
                                             <option>05</option><option>06</option><option>07</option><option>08</option><option>09</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option>
                                             <option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option>
                                             <option>29</option><option>30</option><option>31</option><option>32</option><option>33</option><option>34</option><option>35</option><option>36</option><option>37</option><option>38</option><option>39</option><option>40</option>
                                             <option>41</option><option>42</option><option>43</option><option>44</option><option>45</option><option>46</option><option>47</option><option>48</option><option>49</option><option>50</option><option>51</option><option>52</option>
                                             <option>53</option><option>54</option><option>55</option><option>56</option><option>57</option><option>58</option><option>59</option>
                                          </select>
                                    </div>
                                    <div class="col-md-4 col-xs-4">
                                          <select class="kundli_match_select valid" id="Kund_F_BirthPlace_AM" name="Kund_F_BirthPlace_AM" aria-invalid="false">
                                             <option>AM</option><option>PM</option>
                                          </select>
                                    </div>
                                 </div>
                                 <div class="birthplace mtb">
                                    <label class="col-md-12">Birth Place</label>
                                    <div class="col-md-12">
                                          <input class="kundli_form_input" placeholder="Enter Place Of Birth" autocomplete="off" type="text" data-val="true" data-val-required="Birth place*" id="Kund_BirthPlace" name="Kund_BirthPlace" value="">
                                    </div>
                                    
                                 </div> 
                                    <div class="col-md-12 text-center">
                                       <a class="btn btn-default btn-rounded btn-shadowed" href="#">Get your free kundali right now</a>
                                    </div>
                           </form>
                        </div>
                        <div class="getmarried flexprop">
                           <div class="col-md-6 col-sm-6">
                              <div class="astr-icon">
                                 <div class="col-md-4 col-xs-4 col-sm-4">
                                    <div class="icon">
                                       <img src="<?php echo base_url(); ?>front-assets/images/astrology.png">
                                    </div>
                                    <p>Astrology</p>
                                 </div>
                                 <div class="col-md-4 border col-xs-4 col-sm-4">
                                    <div class="icon">
                                       <img src="<?php echo base_url(); ?>front-assets/images/Kundali-icon.png">
                                    </div>
                                    <p>Kundali</p>
                                 </div>
                                 <div class="col-md-4 col-xs-4 col-sm-4">
                                    <div class="icon">
                                       <img src="<?php echo base_url(); ?>front-assets/images/tarot.png">
                                    </div>
                                    <p>Tarot</p>
                                 </div>
                                 <div class="col-md-4 col-xs-4 col-sm-4">
                                    <div class="icon">
                                       <img src="<?php echo base_url(); ?>front-assets/images/numerology.png">
                                    </div>
                                    <p>Numerology</p>
                                 </div>
                                 <div class="col-md-4 col-xs-4  col-sm-4 border">
                                    <div class="icon">
                                       <img src="<?php echo base_url(); ?>front-assets/images/family.png">
                                    </div>
                                    <p>Family</p>
                                 </div>
                                 <div class="col-md-4 col-xs-4 col-sm-4">
                                    <div class="icon">
                                       <img src="<?php echo base_url(); ?>front-assets/images/medical.png">
                                    </div>
                                    <p>Medical</p>
                                 </div>
                                 <div class="col-md-4 col-xs-4 col-sm-4">
                                    <div class="icon">
                                       <img src="<?php echo base_url(); ?>front-assets/images/wealth.png">
                                    </div>
                                    <p>Wealth</p>
                                 </div>
                                 <div class="col-md-4 border col-xs-4 col-sm-4">
                                    <div class="icon">
                                       <img src="<?php echo base_url(); ?>front-assets/images/marriage.png">
                                    </div>
                                    <p>Marriage</p>
                                 </div>
                                 <div class="col-md-4 col-xs-4 col-sm-4">
                                    <div class="icon">
                                       <img src="<?php echo base_url(); ?>front-assets/images/relationship.png">
                                    </div>
                                    <p>Relationship</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6  col-sm-6">
                              <img src="<?php echo base_url(); ?>front-assets/images/milan-banner.jpg">
                              <a href="" class="btn btn-default btn-rounded btn-shadowed call-now">Call Now</a>
                           </div>
                        </div>
                        <div class="col-md-7 form-field free-kundali-page">
                           <div class="love_arrange flexprop">
                              <div class="text-wrp">
                                 <h3>Love v/s Arrange Marriage ?</h3>
                                 <h5>Get upto 100% <sup>*</sup> Cashback & 1<sup>st</sup> Min free</h5>
                              </div>
                              <a class="btn btn-default btn-rounded btn-shadowed" href="#">Talk Now</a>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="getmarried ">
                              <div class="flexprop">
                                 <div class="col-md-9">
                                    <a href="javascript:void(0)" class="importance">
                                    <img src="<?php echo base_url(); ?>front-assets/images/kundali-banner.png">
                                    </a>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="k-text">
                                       <h3>Do you know that why its <a href="javascript:void(0)" class="importance">important</a> to match kundali</h3>
                                    </div>
                                 </div>
                              </div>
                              <div class="showonbuttonclick">
                                 <div class="ast_heading">
                                    <h1>FREE ONLINE KUNDLI</h1>
                                 </div>
                                 <div class="talk-to-content">
                                    <p>In Vedic astrology, Kundli refers to your birth chart. It is a graphical representation of the twelve houses showing the position of the nine major planets at the time of your birth.</p>
                                    <h3>The following details are required for preparing an online kundli:</h3>
                                    <p>The following details are required for matching the kundlis of the individuals before marriage.</p>
                                    <ul>
                                       <li>Name</li>
                                       <li>Date of Birth</li>
                                       <li>Gender</li>
                                       <li>Place of Birth</li>
                                       <li>Time</li>
                                    </ul>
                                    <h3>Now the question that comes up is: What is the significance of Kundli? How can it be prepared?</h3>
                                    <p>As per Vedic astrology, Kundli is a summary or brief of your entire life. This summary is interpreted by an astrologer through the positioning of the planets in your kundli. Your karma of your previous birth has made you what you are today. Hence, there is a reason behind every action that you take today in your life. Astrology firmly believes in the fact that the heavenly planets influence your thoughts and in turn our actions as well. For instance, an expert astrologer will analyse your kundli and depending upon the present graha dasha, he will let you know about the course of events about to happen in your life. This can help you overcome the ill-effects, if any, and thus, your problem will be minimized.</p>
                                    <p>However, you need to remember that astrology is an empirical science. Thus, you need to consult an expert astrologer who has deep knowledge of astrology and can examine your kundli accordingly. You must also ensure that you do not get duped by fake astrologers who are now easily available everywhere.</p>
                                    <p>Get your free online kundli on onegodmed.com. Not just that, even consult our best astrologers and get to know about your entire life- education, career, marriage, children, foreign visits, old age and moksha. You would indeed be surprised to know as to how many types of kundlis are prepared in astrology.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  
            <div class="col-md-10 col-md-offset-1 dis-none">
               <div class=" register">
                  <div class="row">
                     <div class="col-md-3 register-left">
                        <img src="<?= base_url()?>front-assets/images/header/favicon.png" alt=""/>
                        <h3 style="color:#fff;">Birth Chart</h3>
                        <p>You can generate free kundli through our free kundli software</p>
                     </div>
                     <div class="col-md-9 register-right">
                        <div class="" id="">
                           <div class="" id="home" role="tabpanel" aria-labelledby="home-tab">
                              <h3 class="register-heading">Free Kundali</h3>
                              <div class="row register-form">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="exampleInputEmail1">Name<span style="color:red;">*</span></label>   
                                       <input type="text" placeholder="Your Name" id="fname" name="name" class="form-control fname" autocomplete="off">
                                       <p id="errnamemsg" style="display:none;color:red"></p>
                                    </div>
                                    <div class="form-group">
                                       <label for="exampleInputEmail1" style="display:block;">DOB<span style="color:red;">*</span></label> 
                                       <?php $days = range(1, 31);
                                          $months = range(1, 12);
                                          $years = range(date('Y'), 1900); ?>
                                       <div class="d-flex align-items-center justify-content-between">
                                          <select name="day"  class=" date form-control" id="day" required>
                                             <option value="">Day</option>
                                             <?php
                                                foreach ($days as $day) {
                                                   ?>
                                             <option value="<?php echo($day) ?>"><?php echo($day) ?></option>
                                             <?php
                                                }
                                                ?>
                                          </select>
                                          <select name="month" class= "month form-control" id="month" required>
                                             <option value="">Month</option>
                                             <?php
                                                foreach ($months as $month) {
                                                   ?>
                                             <option value="<?php echo($month) ?>"><?php echo($month) ?></option>
                                             <?php
                                                }
                                                ?>
                                          </select>
                                          <select name="year" class= "year form-control" id="year" required >
                                             <option value="">Year</option>
                                             <?php
                                                foreach ($years as $year) {
                                                   ?>
                                             <option value="<?php echo($year) ?>"><?php echo($year) ?></option>
                                             <?php
                                                }
                                                ?>
                                          </select>
                                       </div>
                                       <p id="errdatemsg" style="display:none;color:red"></p>
                                       <p id="errmonthmsg" style="display:none;color:red"></p>
                                       <p id="erryearmsg" style="display:none;color:red"></p>
                                    </div>
                                    <div class="form-group">
                                       <label for="exampleInputEmail1">Birth Place<span style="color:red;">*</span></label> 
                                       <input type="text" class="form-control birthplace" id="bplace"  placeholder="Birth Place" value="" />
                                       <p id="errbirthmsg" style="display:none;color:red"></p>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="exampleInputEmail1">Gender<span style="color:red;">*</span></label>
                                       <!-- mf-->
                                       <div class="switcher">
                                          <input type="radio" name="kundligender" value="Male" id="yin" class="switcher__input switcher__input--yin gender" checked="">
                                          <label for="yin" class="switcher__label ">Male</label>
                                          <input type="radio" name="kundligender" value="Female" id="yang" class="switcher__input switcher__input--yang gender">
                                          <label for="yang" class="switcher__label ">Female</label>
                                          <span class="switcher__toggle"></span>
                                       </div>
                                       <!--mf-->
                                    </div>
                                    <div class="form-group">
                                       <label for="exampleInputEmail1" style="display:block;">Time<span style="color:red;">*(24 Hours)</span></label> 
                                       <div class="d-flex align-items-center justify-content-between">
                                          <input type="number" placeholder="HH" name="date" id="hh" class="nmb hh form-control" min="0" max="23">
                                          <input type="number" placeholder="MM" name="date" id="mm" class="nmb mm form-control" min="0" max="59">
                                          <input type="number" placeholder="SS" name="date" id="ss" class="nmb ss form-control" min="0" max="59">
                                       </div>
                                       <p id="errhhmsg" style="display:none;color:red"></p>
                                       <p id="errmmmsg" style="display:none;color:red"></p>
                                       <p id="errssmsg" style="display:none;color:red"></p>
                                    </div>
                                    <div class="form-group">
                                       <label for="exampleInputEmail1">Phone Number<span style="color:red;">*</span></label>   
                                       <input type="tel" placeholder="Phone Number" name="phone" id="phone"  class="form-control phone" autocomplete="off">
                                       <p id="errphonemsg" style="display:none;color:red"></p>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label for="exampleInputEmail1">Email<span style="color:red;">*</span></label> 
                                       <input type="email" class="form-control emailid " placeholder="Email"  value="" / autocomplete="off">
                                       <p id="erremailmsg" style="display:none;color:red"></p>
                                    </div>
                                    <input type="submit" class="btnRegister" id="getKundali"  value="Get Kundli"/>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
   </div>
</div>


<section class="services ast_toppadder70 ast_bottompadder70 main_servece home_blog">
   <div class="container table-responsive">
      <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
         <div class="ast_heading">
            <h2>Free <span>Kundali & Match Making</span></h2>
            <p>With the guidance of our verified experts, listen to the language of the stars and planets and determine whether they will shed light on you or cause darkness in your future years!</p>
         </div>
      </div>
      <div class="row">
         <div class="services1 new-design">
            
            <div class="col-md-3 col-xs-6">
               <div class="ast_blog_box">
                  <div class="ast_blog_img">
                        <div class="service-img">
                            <img src="<?php echo base_url(); ?>front-assets/images/horoscope.png" alt="horoscope " title="Horoscope">
                            <div class="s-description">
                                <h3>free daily Horoscope</h3>
                                <a href="#">Get free Horoscope</a>
                            </div>
                        </div>
                        <p>Check your free Horoscope Predictions</p>
                  </div>
                  
               </div>
            </div>

            <div class="col-md-3 col-xs-6">
               <div class="ast_blog_box">
                  <div class="ast_blog_img">
                        <div class="service-img">
                            <img src="<?php echo base_url(); ?>front-assets/images/match-making.png" alt="Match Making" title="Match Making">
                            <div class="s-description">
                                <h3>Match Making</h3>
                                <a href="<?= base_url() ?>kundali-match-making/">Check Your Compatibilty</a>
                            </div>
                        </div>
                        <p>Match your astrological blue print with partner for Date,Love & Marriage</p>
                  </div>
                 
               </div>
            </div>


            <div class="col-md-3 col-xs-6">
               <div class="ast_blog_box">
                  <div class="ast_blog_img">
                        <div class="service-img">
                            <img src="<?php echo base_url(); ?>front-assets/images/calculator.png" alt="Numerology Calculator" title="Numerology Calculator">
                            <div class="s-description">
                                <h3>Numerology Calculator</h3>
                                <a href="<?= base_url() ?>numerology/">Numerology Calculator</a>
                            </div>
                        </div>
                        <p>Check your free Numerology Predictions</p>
                  </div>
                  
               </div>
            </div>


            <div class="col-md-3 col-xs-6">
               <div class="ast_blog_box">
                  <div class="ast_blog_img">
                    <div class="service-img">
                    <img src="<?php echo base_url(); ?>front-assets/images/punchang.png" alt="Panchang" title="BPanchanglog">
                            <div class="s-description">
                                <h3>Panchang</h3>
                                <a href="<?= base_url() ?>panchang/">Check Daily free Panchang</a>
                            </div>
                        </div>
                        <p>Get today's Panchang,Hora & Auspicious Time</p>
                  </div>
                 
               </div>
            </div>
            
         </div>
      </div>
   </div>
</section>
<div class="ast_whywe_wrapper ast_toppadder70 ast_bottompadder70 home_blog  free-kundali-section dis-none">
   <div class="container">
      <div class="ast_heading">
         <h1>FREE ONLINE KUNDLI</h1>
      </div>
      <div class="talk-to-content">
         <p>In Vedic astrology, Kundli refers to your birth chart. It is a graphical representation of the twelve houses showing the position of the nine major planets at the time of your birth.</p>
         <h3>The following details are required for preparing an online kundli:</h3>
         <p>The following details are required for matching the kundlis of the individuals before marriage.</p>
         <ul>
            <li>Name</li>
            <li>Date of Birth</li>
            <li>Gender</li>
            <li>Place of Birth</li>
            <li>Time</li>
         </ul>
         <h3>Now the question that comes up is: What is the significance of Kundli? How can it be prepared?</h3>
         <p>As per Vedic astrology, Kundli is a summary or brief of your entire life. This summary is interpreted by an astrologer through the positioning of the planets in your kundli. Your karma of your previous birth has made you what you are today. Hence, there is a reason behind every action that you take today in your life. Astrology firmly believes in the fact that the heavenly planets influence your thoughts and in turn our actions as well. For instance, an expert astrologer will analyse your kundli and depending upon the present graha dasha, he will let you know about the course of events about to happen in your life. This can help you overcome the ill-effects, if any, and thus, your problem will be minimized.</p>
         <p>However, you need to remember that astrology is an empirical science. Thus, you need to consult an expert astrologer who has deep knowledge of astrology and can examine your kundli accordingly. You must also ensure that you do not get duped by fake astrologers who are now easily available everywhere.</p>
         <p>Get your free online kundli on onegodmed.com. Not just that, even consult our best astrologers and get to know about your entire life- education, career, marriage, children, foreign visits, old age and moksha. You would indeed be surprised to know as to how many types of kundlis are prepared in astrology.</p>
      </div>
   </div>
</div>
<script>
   $(document).ready(function(){
   $("#getKundali").click(function () {
   
       var name = $('.fname').val();
       
       var gender = $('input[name=kundligender]:checked').val();
        
       var date = $('.date').val();
        
       var month = $('.month').val();
        
       var year = $('.year').val();
        
       
       var hh = $('.hh').val();
        
      var mm = $('.mm').val();
       
      var ss = $('.ss').val();
       
       var birthplace = $('.birthplace').val();
        
      var phone = $('.phone').val();
       
       var email = $('.emailid').val();
       
        if(name==""){
           $('#errnamemsg').css('display', 'block');
           $('#errnamemsg').text('Please enter your  name');
           return false;
       }
        var patt =  /^[a-zA-Z'-]+$/;
       if((name.length <=2) || (name.length >=26)  ) { 
               
           
           $('#errnamemsg').css('display', 'block');
           $('#errnamemsg').text('Please enter your Correct name');
           return false;
       }
       if(date=="" || date>31 || date<=0){
           $('#errdatemsg').css('display', 'block');
           $('#errdatemsg').text('Please enter your Correct Date');
           return false;
       }
       if(month=="" || month>12 || month<=0 ){
           $('#errmonthmsg').css('display', 'block');
           $('#errmonthmsg').text('Please enter your Correct Month');
           return false;
       }
       if(year=="" || year>2099 || year<1900){
           $('#erryearmsg').css('display', 'block');
           $('#erryearmsg').text('Please enter your Correct Year');
           return false;
       }
        
       
       if(hh=="" || hh>23 || hh<0){
           $('#errhhmsg').css('display', 'block');
           $('#errhhmsg').text('Please enter your Correct Hour');
           return false;
       }
   
       
       
       if(mm=="" || mm>59 || mm<0){
           $('#errmmmsg').css('display', 'block');
           $('#errmmmsg').text('Please enter your Minute');
           return false;
       }
       if(ss=="" || ss>59 || ss<0){
           $('#errssmsg').css('display', 'block');
           $('#errssmsg').text('Please enter your Second');
           return false;
       }
       if(birthplace==""){
           $('#errbirthmsg').css('display', 'block');
           $('#errbirthmsg').text('Please enter your Birthdate');
           return false;
       }
       var pattern =  /^[a-zA-Z'-]+$/;
       if((birthplace.length <=2) || (birthplace.length >=26) || !(pattern.test(birthplace))) { 
               
           
           $('#errbirthmsg').css('display', 'block');
           $('#errbirthmsg').text('Please enter your Valid Birthplace');
           return false;
       }
      
       if(phone==""){
           $('#errphonemsg').css('display', 'block');
           $('#errphonemsg').text('Please enter your Phoneno');
           return false;
       }
       if(phoneno(phone)==false){
               //alert(IsEmail(email));
   
               $('#errphonemsg').css('display', 'block');
             $('#errphonemsg').text('Please enter your valid phoneno');
             return false;
           }
        function phoneno(phone) {
       var phone = $('input[name="phone"]').val(),
       intRegex =/^\d{10}$/;
   
   if((phone.length < 7) || (phone.length >15) ||(!intRegex.test(phone)))
   {
        //alert('Please enter a valid phone number.');
        return false;
   }
    }  
       if(email==""){
           $('#erremailmsg').css('display', 'block');
           $('#erremailmsg').text('Please enter your Email');
           return false;
       }
   
       if(IsEmail(email)==false){
               //alert(IsEmail(email));
   
               $('#erremailmsg').css('display', 'block');
             $('#erremailmsg').text('Please enter your valid email');
             return false;
           }
   function IsEmail(email) {
       //alert('hii');
     var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
     if(!regex.test(email)) {
       return false;
     }else{
       return true;
     }
   }
   
   
   
      
       $('#errnamemsg').css('display', 'none');
        $('#errdatemsg').css('display', 'none');
         $('#errmonthemsg').css('display', 'none');
          $('#erryearmsg').css('display', 'none');
          $('#errhhmsg').css('display', 'none');
          $('#errmmmsg').css('display', 'none');
          $('#errssmsg').css('display', 'none');
           $('#errbirthmsg').css('display', 'none');
        
        $('#errphonemsg').css('display', 'none');
        $('#erremailmsg').css('display', 'none');
        
    $.ajax({
   
               url: "<?= base_url('kundali/details')?>",
   
               type: 'POST',
   
                 dataType: "json",
   
               data: {'name':name,
                   'gender': gender,
                   'date': date,
                   'month': month,
                   'year': year,
                   'hh': hh,
                   'mm': mm,
                   'ss': ss,
                   'birthplace': birthplace,
                   'phone': phone,
                   'email': email
               },
   
               success: function(response) {
                   if(response.status == 'success'){
                       window.location.href="<?= base_url(); ?>kundali/";
                   }
               
           }
   
   });
   });
   $(".fname").click(function(){
       $('#errnamemsg').css('display', 'none');
   });
   $(".date").click(function(){
       $('#errdatemsg').css('display', 'none');
   });
   $(".month").click(function(){
       $('#errmonthmsg').css('display', 'none');
   });
   $(".year").click(function(){
       $('#erryearmsg').css('display', 'none');
   });
   $(".hh").click(function(){
       $('#errhhmsg').css('display', 'none');
   });
   $(".mm").click(function(){
       $('#errmmmsg').css('display', 'none');
   });
   $(".ss").click(function(){
       $('#errssmsg').css('display', 'none');
   });
   $(".birthplace").click(function(){
       $('#errbirthmsg').css('display', 'none');
   });
   $(".phone").click(function(){
       $('#errphonemsg').css('display', 'none');
   });
   $(".emailid").click(function(){
       $('#erremailmsg').css('display', 'none');
   });
   
   });
   
</script>
<script>
   $(document).ready(function(){
       $(".fname").keydown(function(event){
           //alert('hii');
           var inputValue = event.which;
           //alert(inputValue);
           // allow letters and whitespaces only.
           if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0) && (inputValue != 8)&& (inputValue != 9) ) { 
               event.preventDefault(); 
           }
       });
   
   
   $(".birthplace").keydown(function(event){
           var inputValue = event.which;
           //alert(inputValue);
           // allow letters and whitespaces only.
           if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0) && (inputValue != 8)&& (inputValue != 9) ) { 
               event.preventDefault(); 
           }
       });
   $(".phone").keydown(function(event){
           var inputValue = event.which;
           //alert(inputValue);
           // allow letters and whitespaces only.
           if(!(inputValue >= 65 && inputValue <= 120) && (inputValue == 32 && inputValue != 0) && (inputValue != 8)&& (inputValue != 9)) { 
               event.preventDefault(); 
           }
       });
   $(".emailid").keydown(function(event){
           var inputValue = event.which;
           //alert(inputValue);
           // allow letters and whitespaces only.
           if(!(inputValue >= 65 && inputValue <= 120) && (inputValue == 32 && inputValue != 0) && (inputValue != 8) && (inputValue != 9)) { 
               event.preventDefault(); 
           }
       });
   
   
   $(".date").keyup(function(event){
    var keyval=$('.date').val();
   
    if((keyval >31) || (keyval <=0 )){
   $('#errdatemsg').css('display', 'block');
           $('#errdatemsg').text('Please enter your Correct Date');
   }
    });
   $(".month").keyup(function(event){
    var keyvalm=$('.month').val();
    
    if((keyvalm >12) || (keyvalm <=0 )){
   $('#errmonthmsg').css('display', 'block');
           $('#errmonthmsg').text('Please enter your Correct Month');
   }
    });
   $(".year").keyup(function(event){
    var keyvaly=$('.year').val();
    
    if((keyvaly >2099) || (keyvaly <=1900 )){
   $('#erryearmsg').css('display', 'block');
           $('#erryearmsg').text('Please enter your Correct Year');
   }
    });
   });
           
</script> 
<style>.free-kundali-section{display:block!important;}</style>