<style>
   .register-left {
   text-align: center;
   color: #fff;
   margin-top: 12%;
   height: 100%;
   }
   .bdate, .bmonth, .byear, .bhh, .bmm, .bss, .gdate, .gmonth, .gyear, .ghh, .gmm, .gss{width:30%;}
   .d-flex{display:flex;} 
   .align-items-center{align-items:center;} 
   .justify-content-between{justify-content:space-between;}
   select#ctryCode {
   border: none;
   position: absolute;
   top: 31px;
   left: 7px;
   background: transparent;
   }.page_title h1 {
   float: left;
   width: 100%;
   color: #fff;
   margin: 0;
   font-size: 36px;
   text-transform: capitalize;
   }
   .kundali-matching-section{display:block!important;}
</style>

<div class="ast_about_wrapper ast_toppadder70 ast_bottompadder70">
    <div class="container">
                   <div class="row">
                      <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                         <div class="ast_heading dis">
                            <h1>Free Match Making</h1>
                         </div>
                      </div>
                      <div class="col-md-3 col-sm-3 kundali-img">
                         <img src="<?php echo base_url(); ?>front-assets/images/match-making-detail.png" alt="" />
                         
                      </div>
                      <div class="col-md-9 col-sm-9">
                         <div class="k-description">
                            <p>Welcome to this free horoscope/Kundli match matching tool. We have utilized 
                                the most excellent technology to give a perfect match making report.
                                Kundli Matching or Horoscope Matching plays very important role at the time of marriage. 
                                Marriage is one of the most beautiful event for everyone. 
                                Every person wants a perfect life partner with whom he/she can create beautiful memories in life. 
                                In our Indian tradition Kundali matching between the bride and groom is essential for marriage. 
                               
                            </p>
                            <p>
                            Kundli matching of a couple assures a happy, healthy and prosperous married life. 
                                The important aspects which are considered at the time of marriage are Gun Milan, NadiDosha, ManglikDosha, BhakootDosha, GanaDosha, Strength of Navamsa Chart etc.
                                If there are any doshas in kundli/horoscope of both boy and girl then by astrological remedies we can nullifyits bad effects.
                            </p>
                           
                            <div class="trynow">
                               <a href="#milan-form">
                                  <img src="<?php echo base_url(); ?>front-assets/images/TRY-NOW-ICON.png" alt="" />
                               </a>
                            </div>
                         </div>
                      </div>
                   </div>
    </div>
</div>

<!-- form section -->
 <section class=" match-form kundali-form mb-20" id="milan-form">
    <div class="container-fluid">
        <div class="row">
        <h3 class="title-bg container text-center">
                <p>Find Your Match</p>
             </h3>
        </div>
        <div class="row pinkbg" >
           
             <div class="col-md-3 img col-sm-2">
                <img src="<?php echo base_url(); ?>front-assets/images/boy.png" alt="" />
             </div>
                 <div class="col-md-6 col-sm-8 frm form-shadow">
                    <div class="row">
                         <div class="col-md-6 col-sm-6">
                             <div class="visibleonMobile">
                                <img src="<?php echo base_url(); ?>front-assets/images/boy.png" alt="" />
                             </div>
                             <div class="col-md-12 text-center"><h3>Boy</h3></div>
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
                                    
                            </form>
                        </div>
                        <div class="col-md-6 col-sm-6">
                        <div class="visibleonMobile">
                            <img src="<?php echo base_url(); ?>front-assets/images/girl.png" alt="" />
                             </div>
                        <div class="col-md-12 text-center"><h3>Girl</h3></div>
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
                                   
                            </form>
                        </div>
                        <div class="col-md-12 text-center">
                                        <a class="btn btn-default btn-rounded btn-shadowed" href="#">Match Your Kundali now</a>
                        </div>
                    </div>
                </div>
               
             <div class="col-md-3 img col-sm-2">
             <img src="<?php echo base_url(); ?>front-assets/images/girl.png" alt="" />
             </div>
            
        </div>
    </div>
 </section>
<!-- form section end========-->

<!-- ==============Get Married =============-->
 <section>
    <div class="container">
        <div class="row m-zero">
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
                   <img src="<?php echo base_url(); ?>front-assets/images/best-life-partner-banner.png">
                   <a href="" class="btn btn-default btn-rounded btn-shadowed call-now milan-call">Call Now</a>
                </div>
             </div>
        </div>
    </div>
</section>
<!-- ==============Get Married =============-->

<!-- =============Talk now =========== -->
<section>
    <div class="container">
        <div class="row m-zero">
            <div class="col-md-7 form-field">
                <div class="love_arrange flexprop pink">
                   <div class="text-wrp">
                      <h3>Find your love Partner in 2022</h3>
                      <h5>Get upto 100% <sup>*</sup> Cashback & 1<sup>st</sup> Min free</h5>
                   </div>
                   <a class="btn btn-default btn-rounded btn-shadowed" href="#">Talk Now</a>
                </div>
             </div>
        </div>
    </div>
</section>

<!-- =========important of kundali============= -->
<section class="mb-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="getmarried ">
                   <div class="flexprop">
                      <div class="col-md-9">
                         <a href="javascript:void(0)" class="importance">
                         <img src="<?php echo base_url(); ?>front-assets/images/adv-banner.png">
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
                        <h1>WHAT IS KUNDALI MATCHING ?</h1>
                    </div>
                    <div class="talk-to-content">
     
                        <p>Kundli matching is the process of checking the compatibility of the horoscopes of the prospective bride and groom. In Vedic Astrology, this is a means of finding out the future of the married life of two individuals.</p> 
                        <p>Nowadays, Kundli matching can be done through the use of a kundli matching software. Further, this match making can be analysed by an expert astrologer.</p> 
                        <h3>Details required for Kundli matching</h3>
                        <p>The following details are required for matching the kundlis of the individuals before marriage.</p>
                        <ul>
                            <li>Name</li>
                            <li>Date of Birth</li>
                            <li>Gender</li>
                            <li>Place</li>
                            <li>Time</li>
                        </ul>
                        <p>Once these details are input in the kundli matching software, the compatibility of the two hororscopes comes out to be analysed by an expert astrologer. Ashtakoot and Dashtakoot are two matching systems largely followed in Vedic Astrology.</p>
                        
                        <h3>Significance of Kundli Matching</h3>
                        <p>Kundli matching helps you to understand the future of your married life. In case, any conflict or problem is indicated, then you can seek assistance from an astrologer and minimise the negative effects of your married life.</p>
                        <p>Moreover, considering the changing socio-economic milieu of the Indian society, Kundli matching helps you to address your insecurities and fears through an astrologer. Kundli matching basically, ensures that you enjoy marital bliss in your life along with the blessings of your parents.</p>
                        <p>In simple words, Kundli matching is the process of matching the ‘gun’ of the two individuals. There are total 36 gunas which are matched. If 18 gunas match, then happy marriage is suggested. In case, the gunas matching are less, or else any dosh is there in the compatibility of the two horoscopes, then an astrologer should be consulted. It is to be noted that if you ignore any dosh such as mangal dosh in the kundli matching process, then it can prove to be detrimental for your married life. For example, in kundli matching, two individuals should not have the same ‘nadi’. In case, it is the same ‘nadi’, then it is considered a dosh and you have to seek remedy from an astrologer.</p>
                        <p>So, what are you waiting for! Contact our expert astrologers on ongodmed.com for any kind of marriage related queries</p>
                    </div>
                   </div>
                </div>
             </div>
        </div>
    </div>
</section>
<!-- =========important of kundali============= -->

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
                            <img src="<?php echo base_url(); ?>front-assets/images/kundali.png" alt="Free Kundali" title="Free Kundali">
                            <div class="s-description">
                                <h3>Free Kundali</h3>
                                <a href="<?= base_url() ?>free-kundali/">Get Your Free Kundali</a>
                            </div>
                        </div>
                        <p>Get your free kundali by Date of birth & Time</p>
                  </div>
               </div>
            </div>

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


<div class="ast_whywe_wrapper ast_toppadder70 ast_bottompadder70 home_blog  kundali-matching-section dis-none">
   <div class="container">
      <div class="ast_heading">
         <h1>WHAT IS KUNDALI MATCHING ?</h1>
      </div>
      <div class="talk-to-content">
         <p>Kundli matching is the process of checking the compatibility of the horoscopes of the prospective bride and groom. In Vedic Astrology, this is a means of finding out the future of the married life of two individuals.</p>
         <p>Nowadays, Kundli matching can be done through the use of a kundli matching software. Further, this match making can be analysed by an expert astrologer.</p>
         <h3>Details required for Kundli matching</h3>
         <p>The following details are required for matching the kundlis of the individuals before marriage.</p>
         <ul>
            <li>Name</li>
            <li>Date of Birth</li>
            <li>Gender</li>
            <li>Place</li>
            <li>Time</li>
         </ul>
         <p>Once these details are input in the kundli matching software, the compatibility of the two hororscopes comes out to be analysed by an expert astrologer. Ashtakoot and Dashtakoot are two matching systems largely followed in Vedic Astrology.</p>
         <h3>Significance of Kundli Matching</h3>
         <p>Kundli matching helps you to understand the future of your married life. In case, any conflict or problem is indicated, then you can seek assistance from an astrologer and minimise the negative effects of your married life.</p>
         <p>Moreover, considering the changing socio-economic milieu of the Indian society, Kundli matching helps you to address your insecurities and fears through an astrologer. Kundli matching basically, ensures that you enjoy marital bliss in your life along with the blessings of your parents.</p>
         <p>In simple words, Kundli matching is the process of matching the ‘gun’ of the two individuals. There are total 36 gunas which are matched. If 18 gunas match, then happy marriage is suggested. In case, the gunas matching are less, or else any dosh is there in the compatibility of the two horoscopes, then an astrologer should be consulted. It is to be noted that if you ignore any dosh such as mangal dosh in the kundli matching process, then it can prove to be detrimental for your married life. For example, in kundli matching, two individuals should not have the same ‘nadi’. In case, it is the same ‘nadi’, then it is considered a dosh and you have to seek remedy from an astrologer.</p>
         <p>So, what are you waiting for! Contact our expert astrologers on ongodmed.com for any kind of marriage related queries</p>
      </div>
   </div>
</div>
<script>
   $(document).ready(function(){
   $("#getmatching").click(function () {
   
       var bname = $('.bname').val();
       
       
       var bdate = $('.bdate').val();
        
       var bmonth = $('.bmonth').val();
        
       var byear = $('.byear').val();
        
       
       var bhh = $('.bhh').val();
        
      var bmm = $('.bmm').val();
       
      var bss = $('.bss').val();
       
       var bbirth = $('.bbirth').val();
        
      var gname = $('.gname').val();
       
       var gdate = $('.gdate').val();
       
        var gmonth = $('.gmonth').val();
        
         var gyear = $('.gyear').val();
         
          var ghh = $('.ghh').val();
          
          var gmm = $('.gmm').val();
          
          var gss = $('.gss').val();
          
          var gbirth = $('.gbirth').val();
          
          var gphone = $('.gphone').val();
          
           var gemail = $('.gemail').val();
           
           var ctrycode = $('#ctryCode').val();
       
       
        if(bname==""){
           $('#errbnamemsg').css('display', 'block');
           $('#errbnamemsg').text('Please enter your full name');
           return false;
       }
       var bpattern =  /^[a-zA-Z'-]+$/;
       if((bname.length <=2) || (bname.length >=26) )  { 
               
           
           $('#errbnamemsg').css('display', 'block');
           $('#errbnamemsg').text('Please enter your valid name');
           return false;
       }
       if(bdate=="" || bdate>31 || bdate<=0 ){
           $('#errbdatemsg').css('display', 'block');
           $('#errbdatemsg').text('Please enter your Correct Date');
           return false;
       }
       if(bmonth=="" || bmonth>12 || bmonth<=0){
           $('#errbmonthmsg').css('display', 'block');
           $('#errbmonthmsg').text('Please enter your Correct Month');
           return false;
       }
       if(byear=="" || byear>2099 || byear<1900){
           $('#errbyearmsg').css('display', 'block');
           $('#errbyearmsg').text('Please enter your Correct Year');
           return false;
       }
       if(bhh=="" || bhh>23 || bhh<0){
           $('#errbhhmsg').css('display', 'block');
           $('#errbhhmsg').text('Please enter your Correct Hour');
           return false;
       }
       if(bmm=="" || bmm>59 || bmm<0){
           $('#errbmmmsg').css('display', 'block');
           $('#errbmmmsg').text('Please enter your Correct Minute');
           return false;
       }
       if(bss=="" || bss>59 || bss<0){
           $('#errbssmsg').css('display', 'block');
           $('#errbssmsg').text('Please enter your Correct Second');
           return false;
       }
       if(bbirth==""){
           $('#errkunbirthmsg').css('display', 'block');
           $('#errkunbirthmsg').text('Please enter your Birth');
           return false;
       }
        var bb =  /^[a-zA-Z'-]+$/;
        if((bbirth.length <=2) || (bbirth.length >=26)|| !(bb.test(bbirth)))  { 
               
           
           $('#errkunbirthmsg').css('display', 'block');
           $('#errkunbirthmsg').text('Please enter your Valid Birthplace');
           return false;
       }
       
       
       
       if(gname==""){
           $('#errgnamemsg').css('display', 'block');
           $('#errgnamemsg').text('Please enter your Name');
           return false;
       }
        var gpattern =  /^[a-zA-Z'-]+$/;
       if((gname.length <=2) || (gname.length >=26)) { 
               
           
           $('#errgnamemsg').css('display', 'block');
           $('#errgnamemsg').text('Please enter your valid name');
           return false;
       }
       if(gdate=="" || gdate>31 || gdate<=0){
           $('#errgdatemsg').css('display', 'block');
           $('#errgdatemsg').text('Please enter your Correct Date');
           return false;
       }
       if(gmonth=="" || gmonth>12 || gmonth<=0){
           $('#errgmonthmsg').css('display', 'block');
           $('#errgmonthmsg').text('Please enter your Correct  Month');
           return false;
       }
       if(gyear=="" || gyear>2099 || gyear<1900){
           $('#errgyearmsg').css('display', 'block');
           $('#errgyearmsg').text('Please enter your Correct Year');
           return false;
       }
       if(ghh=="" || ghh>23 || ghh<0){
           $('#errghhmsg').css('display', 'block');
           $('#errghhmsg').text('Please enter your Correct Hour');
           return false;
       }
       
        if(gmm=="" || gmm>59 || gmm<0){
           $('#errgmmmsg').css('display', 'block');
           $('#errgmmmsg').text('Please enter your Correct Minute');
           return false;
       }
        if(gss=="" || gss>59 || gss<0){
           $('#errgssmsg').css('display', 'block');
           $('#errgssmsg').text('Please enter your Correct Second');
           return false;
       }
      
       if(gbirth==""){
           $('#errgbirth').css('display', 'block');
           $('#errgbirth').text('Please enter your Birth');
           return false;
       }
        var gg =  /^[a-zA-Z'-]+$/;
       if((gbirth.length <=2) || (gbirth.length >=26))  { 
               
           
           $('#errgbirth').css('display', 'block');
           $('#errgbirth').text('Please enter your Valid Birthplace');
           return false;
       }
       
       if(gphone==""){
           $('#errmatchphonemsg').css('display', 'block');
           $('#errmatchphonemsg').text('Please enter your Phoneno');
           return false;
       }
    if(phoneno(gphone)==false){
               //alert(IsEmail(email));
   
               $('#errmatchphonemsg').css('display', 'block');
             $('#errmatchphonemsg').text('Please enter your valid phoneno');
             return false;
           }
        function phoneno(gphone) {
       var phone = $('.gphone').val(),
       intRegex =/^\d{10}$/;
   
   if((phone.length < 7) ||(phone.length >15) )
   {
        //alert('Please enter a valid phone number.');
        return false;
   }
    }  
   
        
       
       
       if(gemail==""){
           $('#errmatchemailmsg').css('display', 'block');
           $('#errmatchemailmsg').text('Please enter your Email');
           return false;
       }
      if(IsEmail(gemail)==false){
               //alert(IsEmail(email));
   
               $('#errmatchemailmsg').css('display', 'block');
             $('#errmatchemailmsg').text('Please enter your valid email');
             return false;
           }
   function IsEmail(gemail) {
       //alert('hii');
     var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
     if(!regex.test(gemail)) {
       return false;
     }else{
       return true;
     }
   }
       $('#errbnamemsg').css('display', 'none');
        $('#errbdatemsg').css('display', 'none');
         $('#errbmonthmsg').css('display', 'none');
          $('#errbyearmsg').css('display', 'none');
          $('#errbhhmsg').css('display', 'none');
          $('#errbmmmsg').css('display', 'none');
          $('#errbssmsg').css('display', 'none');
           $('#errkunbirthmsg').css('display', 'none');
        
        $('#errgnamemsg').css('display', 'none');
        $('#errbdatemsg').css('display', 'none');
         $('#errbmonthmsg').css('display', 'none');
        $('#errbyearmsg').css('display', 'none');
         $('#errghhmsg').css('display', 'none');
        $('#errgmmmsg').css('display', 'none');
        $('#errgssmsg').css('display', 'none');
        $('#errgbirth').css('display', 'none');
        $('#errmatchphonemsg').css('display', 'none');
        $('#errmatchemailmsg').css('display', 'none');
        
    $.ajax({
   
               url: "<?= base_url('match/details')?>",
   
               type: 'POST',
   
                 dataType: "json",
   
               data: {'bname':bname,
                   'bdate': bdate,
                   'bmonth': bmonth,
                   'byear': byear,
                   'bhh': bhh,
                   'bmm': bmm,
                   'bss': bss,
                   'bbirth': bbirth,
                   'gname': gname,
                   'gdate': gdate,
                   'gmonth': gmonth,
                   'gyear': gyear,
                   'ghh': ghh,
                   'gmm': gmm,
                   'gss': gss,
                   'gbirth': gbirth,
                   'gphone': gphone,
                   'gemail': gemail,
                   'ctrycode': ctrycode
               },
   
               success: function(response) {
                   if(response.status == 'success'){
                       window.location.href="<?= base_url(); ?>match/";
                   }
               
           }
   
   });
   });
   $(".bname").click(function(){
       $('#errbnamemsg').css('display', 'none');
   });
   $(".bdate").click(function(){
       $('#errbdatemsg').css('display', 'none');
   });
   $(".bmonth").click(function(){
       $('#errbmonthmsg').css('display', 'none');
   });
   $(".byear").click(function(){
       $('#errbyearmsg').css('display', 'none');
   });
   $(".bhh").click(function(){
       $('#errbhhmsg').css('display', 'none');
   });
   $(".bmm").click(function(){
       $('#errbmmmsg').css('display', 'none');
   });
   $(".bss").click(function(){
       $('#errbssmsg').css('display', 'none');
   });
   $(".bbirth").click(function(){
       $('#errkunbirthmsg').css('display', 'none');
   });
   
   
   $(".gname").click(function(){
       $('#errgnamemsg').css('display', 'none');
   });
   $(".gdate").click(function(){
       $('#errgdatemsg').css('display', 'none');
   });
   $(".gmonth").click(function(){
       $('#errgmonthmsg').css('display', 'none');
   });
   $(".gyear").click(function(){
       $('#errgyearmsg ').css('display', 'none');
   });
   
   $(".ghh").click(function(){
       $('#errghhmsg').css('display', 'none');
   });
   $(".gmm").click(function(){
       $('#errgmmmsg').css('display', 'none');
   });
   $(".gss").click(function(){
       $('#errgssmsg').css('display', 'none');
   });
   $(".gbirth").click(function(){
       $('#errgbirth').css('display', 'none');
   });
   $(".gphone").click(function(){
       $('#errmatchphonemsg').css('display', 'none');
   });
   $(".gemail").click(function(){
       $('#errmatchemailmsg').css('display', 'none');
   });
   });
   
</script>