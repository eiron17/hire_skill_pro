<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
    <title>Hire Skill Pro | The World's Work Marketplace</title>
	<style>
	
:root {
  /*color*/
  --primary: #1f57c3;
  --primary-dark: #3c8224;
  --primary-dark-2: #5e6d55;
  --primary-dark-3: #e4ebe4;
  --primary-dark-4: #13544e;
  --primary-light: #e9f7e5;
  --primary-light-2: #f2f7f2;
  --black-green: #1f57c3;
  --red: #bc511b;
  --grey: #5e6d55;
  --grey-light: #d5e0d5;
  --grey-light-2: #9aaa97;
  --grey-light-3: #e4ebe4;
  --white: #fff;
  --blue: #1f57c3;
  --blue-dark: #254d97;
  --stone-pink: #a18085;
  --width: 1140px;
  --input-height: 40px;
  --input-radius: 20px;
  --input-form-width: 300px;

  --svg-white: invert(98%) sepia(0%) saturate(0%) hue-rotate(9deg)
    brightness(103%) contrast(103%);
}
* {
  margin: 0;
  padding: 0;
  list-style-type: none;
  box-sizing: border-box;
  font-family: "Arimo", sans-serif;
}

html,
body {
  font-size: 62.5%;
}
	.header {
  font-size: 1.4rem;
  position: fixed;
  width: 100%;
  padding: 0 1rem;
  background-color: var(--white);

  z-index: 101;
}

.header_wrapper {
  display: flex;
  align-items: center;
  justify-content: space-between;
  height: 70px;
  border-bottom: 1px solid var(--grey-light);
}

.header_left {
  display: flex;
  align-items: center;
}

.header_left img {
  height: 2.5rem;
}

.header_left_list {
  display: flex;
  align-items: center;
  margin-left: 2rem;
  color: var(--grey);
  font-weight: 500;
}

.hitem {
  display: flex;
  align-items: center;
  margin: 0 1.5rem;
  cursor: pointer;
}

.hitem a {
  text-decoration: none;
  color: black;
}


.hitem img {
  width: 12px;
  margin-left: 0.5rem;
}

.hr {
  display: flex;
  align-items: center;
}

.hr_form {
  position: relative;
  width: var(--input-form-width);
}

.hr_form input {
  height: var(--input-height);
  border-radius: var(--input-radius);
  border: 1px solid var(--grey-light);
  outline: none;
  width: 100%;
  padding-left: 5rem;
}

.hr_form input::placeholder {
  font-weight: 700;
  padding: 0.8rem;
}

.hr_form_input_icons {
  position: absolute;
  display: flex;
  align-items: center;
  top: 11px;
  left: 16px;
}

.hr_form_input_icons img:nth-child(1) {
  width: 20px;
}

.hr_form_input_icons img:nth-child(2) {
  width: 12px;
}

.hr_btns {
  margin-left: 1rem;
}

.wrapper {
  width: var(--width);
  margin: auto;
}

.btn_primary {
  background-color: var(--white);
  border: none;
  font-size: 1.4rem;
  font-weight: 600;
  color: var(--grey);
  border-radius: 20px;

  padding: 1rem 2.5rem;
  cursor: pointer;
}

.btn_secondary {
  background-color: var(--primary);
  border: 1px solid var(--primary);
  font-size: 1.4rem;
  font-weight: 600;
  color: var(--white);
  padding: 1rem 2.5rem;
  border-radius: 20px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.btn_secondary:hover {
  background-color: var(--primary-dark);
}

.btn_secondary_outline {
  background-color: var(--white);
  border: 1px solid var(--primary);
  /* border: none; */
  font-size: 1.4rem;
  font-weight: 600;
  color: var(--primary);
  padding: 1rem 2.5rem;
  border-radius: 20px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.btn_secondary_outline:hover {
  background-color: var(--primary-light);
}

.title-1 {
  font-size: 80px;
}

.title-3 {
  font-size: 24px;
}

.title-4 {
  font-size: 16px;
}

.section_1 {
  font-size: 1.4rem;
  position: relative;
  padding-top: 140px;
  padding-bottom: 80px;
}

.section_1_bottom {
  /* margin-top: 140px; */
  position: relative;
}

.s1bot h1 {
  color: var(--primary);
}

.s1bot h3 {
  color: var(--grey);
  line-height: 32px;
  font-weight: 500;
  margin-bottom: 30px;
}

.s1bot_btns button {
  margin-right: 2rem;
}

.s1right {
  position: absolute;
  top: 120px;
  right: 0;
  z-index: 99;
}

.s1right img {
  width: 470px;
}
.section_2 {
  font-size: 1.6rem;
  display: flex;
  flex-direction: column;
}

.s2h {
  display: flex;
  flex-direction: column;
}

.s2h h3 {
  font-size: 42px;
  margin-bottom: 10px;
  font-weight: 500;
}

.s2h div {
  display: flex;
  font-size: 1.6rem;
  font-weight: 500;
}

.s2h div p {
  color: var(--grey);
  margin-right: 0.5rem;
  margin-bottom: 40px;
}

.s2h div a {
  text-decoration: none;
}

.s2h div a:hover {
  text-decoration: underline;
}

.section_2_categories {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-content: flex-start;
  grid-column-gap: 30px;
  column-gap: 30px;
  grid-row-gap: 15px;
  row-gap: 15px;
  margin-top: 30px;
  margin-bottom: 80px;
}

.s2c {
  width: 261px;
  height: 134px;
  background: var(--primary-light-2);
  border-radius: 8px;
  padding: 20px;
  font-size: 23px;
  font-weight: 500;
  cursor: pointer;
}

.s2c:hover {
  background: var(--primary-dark-3);
}

.s2c h4 {
  font-size: 23px;
  margin-bottom: 2rem;
}

.s2c div {
  display: flex;
  align-items: center;
  justify-content: space-between;
  font-size: 1.6rem;
  color: var(--primary-dark-2);
}

.s2c div span:first-of-type {
  display: flex;
  align-items: center;
}

.s2c div span:last-of-type {
  margin-right: 40px;
}

.s2c div span:first-of-type img {
  height: 12px;
}


.section_left_btn {
  padding-top: 25px;
}

.section_left_btn button {
  font-size: 15px;
  line-height: 16px;
  letter-spacing: 0.6px;
  padding: 12px 29px;
  font-weight: 500;
}

.section_3_right {
  width: 48%;
  height: 100%;
}

.section_3_right img {
  object-fit: cover;
  margin-bottom: -1px;
}
.section_4 {
  position: relative;
}

.s4bg {
  border-radius: 10px;
  overflow: hidden;
  z-index: 9;
}

.s4bg img {
  max-width: 100%;
  max-height: 100%;
}

.s4bod {
  position: absolute;
  z-index: 10;
  top: 0;
  left: 0;
  font-size: 1.6rem;
  color: #ffff;
  padding: 30px;
  width: 100%;
}

.s4row1 h4 {
  font-size: 24px;
  line-height: 32px;

  font-weight: 500;
  margin-bottom: 85px;
}

.s4row1 h1 {
  font-size: 72px;
  line-height: 72px;

  font-weight: 400;
  margin-bottom: 30px;
}

.s4row h5 {
  font-size: 18px;
  font-weight: 500;
  line-height: 24px;
  margin-bottom: 20px;
}

.s4body {
  display: flex;
  flex-wrap: wrap;
  margin: 0 -15px;
  /* width: 100%; */
}

.s4br {
  flex: 33.33%;
  max-width: 33.33%;
  padding: 0 15px;
}

.s4br button {
  width: 100%;
  display: flex;
  flex-direction: column;
  border-radius: 8px;
  padding: 15px;
  text-align: left;
  cursor: pointer;
  /* font-size: 15px;
    line-height: 16px; */
  /* letter-spacing: 0.6px; */
  color: white;
  background-color: var(--primary);
  border-color: transparent;
  transition: background-color 0.2s, color 0.2s;
}

.s4br button:hover {
  color: var(--primary);
  background-color: var(--white);
}

.s4br button span:first-of-type {
  margin-bottom: 20px;
  font-size: 34px;
  line-height: 34px;
  text-align: left;
  font-weight: 500;
}

.s4br button span:last-of-type {
  font-size: 18px;
  line-height: 22px;
  text-align: left;
  font-weight: 500;
}

.s4br button span:last-of-type sup {
  position: relative;
  font-size: 9px;
  line-height: 18px;
  font-weight: 600;
  vertical-align: top;
  margin-left: 0.2rem;
  top: -0.3rem;
}
.section_5 {
  margin-top: 100px;
  display: flex;
}

.s5left {
  position: relative;
  width: 65%;
  margin-right: 30px;
  border-radius: 8px;
  padding: 30px;
  background-color: var(--primary-light-2);
}

.s5title {
  font-size: 72px;
  line-height: 72px;
  margin: 30px 0;
  font-weight: 400;
}

.s5info_item {
  display: flex;
  padding-right: 200px;
}

.s5info_item_left {
}

.s5info_item_right {
  display: flex;
  flex-direction: column;
}

.s5info_item_left img {
  height: 20px;
  margin-top: 8px;
  margin-right: 15px;
}

.s5info_item_right h3 {
  font-size: 36px;
  font-weight: 500;
  margin-bottom: 10px;
}

.s5info_item_right p {
  font-size: 1.6rem;
  margin-bottom: 30px;
  font-weight: 500;
  color: var(--primary-dark-2);
  letter-spacing: -0.05rem;
}

.s5left_img {
  position: absolute;
  top: 0;
  right: 0;
  height: 694px;
  width: 357px;
  vertical-align: middle;
  transform: translate(99px, -55px);
}

.s5left_img img {
  max-width: 100%;
  max-height: 100%;
}

.s5r {
  width: 35%;
  border-radius: 8px;
  background-color: var(--primary);
}

.s5r_info {
  margin-top: 220px;
  margin-left: 36px;
}

.s5r_info h3 {
  font-size: 36px;
  margin-bottom: 30px;
  color: white;
}

.s5right {
  display: flex;
}

.s5right img {
  height: 30px;
  margin-top: 5px;
  margin-right: 15px;
}

.s5right div {
  display: flex;
  flex-direction: column;
}

.s5right h3 {
  margin-bottom: 10px;
}

.s5right p {
  font-size: 16px;
  font-weight: 500;
  color: white;
  margin-bottom: 30px;
}


.section_8 {
  display: flex;
  justify-content: space-between;
  margin: 0 auto;
  max-width: 1200px;
}

.s8 {
  flex: 1;
  padding: 10px;
}

.s8 a {
  display: block;
  margin-bottom: 8px;
  color: #333;
  text-decoration: none;
  font-size: 16px;
}

.s8 a:hover {
  text-decoration: underline;
}



.footer {
  padding: 90px 10px;

  margin-top: 50px;

  background-color: var(--black-green);
  display: flex;
  flex-direction: column;
}

.footer_top {
  display: flex;
  justify-content: space-between;
}

.footer_top_list {
  flex: 20%;
}

.footer_top_list:not(:last-of-type) {
  margin-right: 20px;
}

.footer_top_list h5 {
  font-size: 1.2rem;
  font-weight: 500;
  color: var(--grey-light);
}

.footer_top_list ul {
  margin: 10px 0;
  display: flex;
  flex-direction: column;
}

.footer_top_list ul li {
  margin-bottom: 10px;
}

.footer_top_list ul li a {
  font-size: 1.2rem;
  font-weight: 400;
  color: var(--white);
  text-decoration: none;
  line-height: 20px;
  transition: text-decoration 0.2s ease;
}

.footer_top_list ul li a:hover {
  text-decoration: underline;
}

.fmid {
  margin-top: 30px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  color: var(--white);
  padding: 9px 0;
  margin-bottom: 20px;
  border-bottom: 1px solid var(--grey);
}

.fmleft,
.fmid_right {
  display: flex;
  align-items: center;
}

.fmleft h5,
.fmid_right h5 {
  margin-right: 20px;
  font-size: 1.2rem;
  font-weight: 500;
}

.fmlist,
.fmid_right_list {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.footer_icons {
  border-radius: 50%;
  border: 1px solid var(--grey-light-2);
  width: 30px;
  height: 30px;
  margin-right: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: background-color 0.2s ease;
}

.footer_icons:hover {
  background-color: var(--grey);
}

.footer_icons img {
  filter: var(--svg-white);

  height: 14px;
}

.fbot {
  display: flex;
  align-items: center;
  color: var(--white);
  font-size: 1.2rem;
  font-weight: 400;
}

.fbot p {
  padding-right: 30px;
  margin-right: 30px;

  border-right: 1px solid var(--white);
}

.flist {
  display: flex;
  align-items: center;
}

.flist li {
  margin-right: 20px;
}

	</style>
</head>
  
  <body>
    <header class="header">
      <div class="header_wrapper wrapper">
        <div class="header_left">
		  <img src="./img/fvlogo.png" alt="" />
		  <ul class="header_left_list">
			<li class="hitem">
			  <a href="client.php" class="button_link">Find Talent</a>
			</li>
			<li class="hitem">
			  <a href="freelancer.php" class="button_link">Find Work</a>
			</li>
			<li class="hitem"> Why Hire Skill Pro</li>
		  </ul>
		</div>
		
        <div class="hr">
		  <div class="hr_form">
			<form action="/search" method="get">
			  <input type="search" placeholder="Search" name="search" id="search_input" />
			</form>
		  </div>
		  <div class="hr_btns">
			<button class="btn_primary">Log In</button>
			<button class="btn_secondary">Sign Up</button>
		  </div>
		</div>
      </div>
    </header>
	
    <section class="section_1 wrapper">
      <div class="s1">
        <div class="s1bot">
          <h1 class="title-1"> Welcome to <br>HireSkillPro!</h1>
          <h3 class="title-3">
			At HireSkillPro, we connect talented freelancers with <br>
			businesses that need their skills. Whether you're looking<br>
			for work or hiring, HireSkillPro makes it easy.
          </h3>
          <div class="s1bot_btns">
            <button class="btn_secondary">Join US</button>
          </div>
        </div>
        <div class="s1right">
          <img src="./img/fvlogo.png" alt="" />
        </div>
      </div>
    </section>
	<br>
	<br>
	<br>
	<br>
    <section class="section_2 wrapper">
      <div class="s2h">
        <h3>Browse talent by category</h3>
        <div>
          <p>Looking for work?</p>
          <a href="#"> Browse jobs</a>
        </div>
      </div>
      <div class="section_2_categories">
        <div class="s2c">
          <h4>Data Entry and Analysis</h4>
          <div>
            <span>
              <img src="./img/star.svg" alt="star" />
              4.85/5
            </span>
            <span> 1,853 skills </span>
          </div>
        </div>
        <div class="s2c">
          <h4>Virtual Assistant</h4>
          <div>
            <span>
              <img src="./img/star.svg" alt="star" />
              4.85/5
            </span>
            <span> 1,853 skills </span>
          </div>
        </div>
        <div class="s2c">
          <h4>Photograpy And Videography</h4>
          <div>
            <span>
              <img src="./img/star.svg" alt="star" />
              4.85/5
            </span>
            <span> 1,853 skills </span>
          </div>
        </div>
        <div class="s2c">
          <h4>Video And Animation</h4>
          <div>
            <span>
              <img src="./img/star.svg" alt="star" />
              4.85/5
            </span>
            <span> 1,853 skills </span>
          </div>
        </div>
        <div class="s2c">
          <h4>Graphic Design</h4>
          <div>
            <span>
              <img src="./img/star.svg" alt="star" />
              4.85/5
            </span>
            <span> 1,853 skills </span>
          </div>
        </div>
        <div class="s2c">
          <h4>Web Development</h4>
          <div>
            <span>
              <img src="./img/star.svg" alt="star" />
              4.85/5
            </span>
            <span> 1,853 skills </span>
          </div>
        </div>
        <div class="s2c">
          <h4>Digital  Marketing</h4>
          <div>
            <span>
              <img src="./img/star.svg" alt="star" />
              4.85/5
            </span>
            <span> 1,853 skills </span>
          </div>
        </div>
        <div class="s2c">
          <h4>Administrative Support</h4>
          <div>
            <span>
              <img src="./img/star.svg" alt="star" />
              4.85/5
            </span>
            <span> 1,853 skills </span>
          </div>
        </div>
      </div>
    </section>

<section class="section_8 wrapper">
  <div class="s8">
    <a href="#">Android Developer</a>
    <a href="#">Bookkeeper</a>
    <a href="#">Content Writer</a>
    <a href="#">Copywriter</a>
    <a href="#">Data Analyst</a>
    <a href="#">Data Entry Specialists</a>
  </div>
  <div class="s8">
    <a href="#">Data Scientist</a>
    <a href="#">Database Administrator</a>
    <a href="#">Front-End Developer</a>
    <a href="#">Game Developer</a>
    <a href="#">Graphic Designer</a>
    <a href="#">iOS Developer</a>
  </div>
  <div class="s8">
    <a href="#">Java Developer</a>
    <a href="#">JavaScript Developer</a>
    <a href="#">Logo Designer</a>
    <a href="#">Mobile App Developer</a>
    <a href="#">PHP Developer</a>
    <a href="#">Project Catalog<sup>TM</sup></a>
  </div>
  <div class="s8">
    <a href="#">Python Developer</a>
    <a href="#">Resume Writer</a>
    <a href="#">Ruby on Rails Developer</a>
    <a href="#">SEO Expert</a>
    <a href="#">Shopify Developer</a>
    <a href="#">Social Media Manager</a>
  </div>
  <div class="s8">
    <a href="#">Software Developer</a>
    <a href="#">Software Engineer</a>
    <a href="#">Technical Writer</a>
    <a href="#">UI Designer</a>
    <a href="#">UX Designer</a>
    <a href="#">Virtual Assistant</a>
  </div>
</section>
<br>
<br>
    <section class="section_4 wrapper">
      <div class="s4bg">
        <img src="./img/client.png" alt="find_talent" />
      </div>
      <div class="s4bod">
        <div class="s4row1">
          <h4>For Clients</h4>
          <h1>
            Find talent <br />
            your way
          </h1>
        </div>

        <div class="s4row">
          <h5><br>
            At HireSkillPro, we connect talented freelancers with businesses that need their skills. <br>
			Whether you're looking for work or hiring, HireSkillPro makes it easy.<br><br><br><br>
          </h5>
        </div>
        <div class="s4body">
          <div class="s4br">
            <button>
              <span>
                Post a job <br/>
                and hire a pro 
				</span>
              <span>Talent Marketplace</span>
            </button>
          </div>
          <div class="s4br">
            <button>
              <span>
                Browse and <br/>
                buy projects
              </span>
              <span>Project Catalog</span>
            </button>
          </div>

          <div class="s4br">
            <button>
              <span>
                Let us help you find <br/>
                the right talent
              </span>
              <span>Talent Pro </span>
            </button>
          </div>
        </div>
      </div>
    </section>
<br> <br> 
<br><br> 
<br>
<br>
 <section class="section_4 wrapper">
      <div class="s4bg">
        <img src="./img/client.png" alt="find_talent" />
      </div>
      <div class="s4bod">
        <div class="s4row1">
          <h4>For Freelancer</h4>
          <h1>
            Find Work <br />
            your way
          </h1>
        </div>

        <div class="s4row">
          <h5><br> Meet clients you’re excited to work with and take <br />your career
            or business to new heights.<br><br><br><br>
          </h5>
        </div>
        <div class="s4body">
          <div class="s4br">
            <button>
              <span>
                Find <br>Opportunities
				</span>
              <span>for every stage 
			  of your freelance career</span>
            </button>
          </div>
          <div class="s4br">
            <button>
              <span>
                 Control  Your  <br>Work<br/>
              </span>
              <span>when, where, and how you work</span>
            </button>
          </div>

          <div class="s4br">
            <button>
              <span>
                Let us help you find <br/>
                the right Work 
              </span>
              <span> Be a Pro </span>
            </button>
          </div>
        </div>
      </div>
    </section>

    <section class="section_5 wrapper">
      <div class="s5left">
        <div class="s5info">
          <h1 class="s5title">
            Why Hire Skill Pro
          </h1>

          <div class="s5info_item">
            <div class="s5info_item_left">
              <img src="./img/star-circle.svg" alt="" />
            </div>
            <div class="s5info_item_right">
              <h3>Proof of quality</h3>
              <p>
                Check any pro’s work samples, client reviews, and <br />identity
                verification.
              </p>
            </div>
          </div>
          <div class="s5info_item">
            <div class="s5info_item_left">
              <img src="./img/doller-circle.svg" alt="" />
            </div>
            <div class="s5info_item_right">
              <h3>No cost until you hire</h3>
              <p>
                Interview potential fits for your job, negotiate rates, and<br />
                only pay for work you approve.
              </p>
            </div>
          </div>
          <div class="s5info_item">
            <div class="s5info_item_left">
              <img src="./img/check-circle.svg" alt="" />
            </div>
            <div class="s5info_item_right">
              <h3>Safe and secure</h3>
              <p>
                Focus on your work knowing we help protect your data<br />
                and privacy. We’re here with 24/7 support if you need it.
              </p>
            </div>
          </div>
        </div>
        <div class="s5left_img">
          <img src="./imgreading.png" alt="" />
        </div>
      </div>
      <div class="s5r">
        <div class="s5r_info">
         <h3>
            ABOUT HIRE  SKILL  PRO
		</h3>
	  </div>
      </div>
    </section>

   

    



    <footer class="footer">
      <div class="wrapper">
        <div class="footer_top">
          <div class="footer_top_list">
            <h5>For Clients</h5>
            <ul>
              <li>
                <a href="#">How to Hire</a>
              </li>

              <li><a href="#">Talent Marketplace</a></li>

              <li>
                <a href="#">Direct Contracts</a>
              </li>
              <li>
                <a href="#">Hire Worldwide</a>
              </li>
            
            </ul>
          </div>
          <div class="footer_top_list">
            <h5>For Talent</h5>
            <ul>
              <li>
                <a href="#">How to Find Work</a>
              </li>

              <li><a href="#">Direct Contracts</a></li>

              <li>
                <a href="#">Find Freelance Jobs Worldwide</a>
              </li>
              
            </ul>
          </div>

          <div class="footer_top_list">
            <h5>Resources</h5>
            <ul>
              <li>
                <a href="#">Help & Support</a>
              </li>

              <li>
                <a href="#">Hire Skill Pro Reviews</a>
              </li>
              
              <li>
                <a href="#">Community</a>
              </li>
              <li>
                <a href="#">Free Business tools</a>
              </li>
            </ul>
          </div>
          <div class="footer_top_list">
            <h5>Company</h5>
            <ul>
              <li>
                <a href="#">About Us </a>

              <li>
              
                <a href="#">Careers</a>
              </li>
              
              <li>
                <a href="#">Contact Us</a>
              </li>
              <li>
                <a href="#">Trust, Safety & Security</a>
              </li>
             
            </ul>
          </div>
        </div>
        <div class="fmid">
          <div class="fmleft">
            <h5>Follow Us</h5>
            <div class="fmlist">
              <div class="footer_icons">
                <img src="./img/facebook.svg" alt="facebook" />
              </div>
              <div class="footer_icons">
                <img src="./img/linkedIn.svg" alt="linkedIn" />
              </div>
              <div class="footer_icons">
                <img src="./img/twitter.svg" alt="twitter" />
              </div>
              <div class="footer_icons">
                <img src="./img/youtube.svg" alt="youtube" />
              </div>
              <div class="footer_icons">
                <img src="./img/instagram.svg" alt="instagram" />
              </div>
            </div>
          </div>
          
        </div>
        <div class="fbot">
          <p>2024 Hire Skill Pro Inc.</p>
          <ul class="flist">
            <li>Terms of Service</li>
            <li>Privacy Policy</li>
            <li>Cookie Settings</li>
            <li>Accessibility</li>
          </ul>
        </div>
      </div>
    </footer>
  </body>
</html>
