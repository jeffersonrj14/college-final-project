# Ozone Online Shop (College Final Project)

This is my group final project back when I was in college. I graduated in **April 2023**.
  - My College: [日本コンピュータ専門学校｜Nihon Computer Professional Training College, Osaka, Japan](https://study-osaka.com/accepting_school/kou021/)

## 合格グループ (Group Goukaku)

"合格" (Goukaku) in Japanese means "pass" or "qualified." It's often used in the context of passing an exam, test, or meeting certain standards or criteria. Therefore, naming our group "Goukaku" means that we're confident we can graduate from this college together.

Group Members (Not all people have GitHub.)
- [Jefferson/ジェファソン](https://github.com/jeffersonrj14)
- [Bank San/ソン](https://www.instagram.com/bank_44san)
- [Maritou/マリトゥ](https://www.instagram.com/asmith_malith/)
- 西田/ニシダ
- [Muhammad Raffi/ラッフィ](https://github.com/Wallens11)

We were attempting to develop a fully operational online shop, but we did not have the time to do it because we were only given four months. So this is what we were able to do, and we worked hard to make it the best we could. However, it was not responsive enough for mobile use and only worked on desktops.

---

### The features we managed to finish include:

- [x] Adding items to the cart
- [x] Signing up / logging in
- [x] User database for sign-ups / log-ins
- [x] Sending OTP to email during sign-up
- [x] Checkout process
- [x] Email confirmation post-checkout.
- [x] Product Search 
- [x] Account dashboard
  - [x] Purchase history.
  - [x] Account information such as Name, Address, email
  
- [x] Cart functionality
  - [x] Total price calculation
  - [x] Product deletion
  - [x] Adding multiple quantities of a product

### The feature we couldn't complete is:
- [ ] Payment Method (Visa/Mastercard/Lawson/Paypay/Cash(現金）, etc)
  - [ ] Entering Card Information 
- [ ] Localization from EN to JP and vice versa
- [ ] Password change
- [ ] Forgot Password
- [ ] Sometimes encountering errors after logging in when deployed locally, but not occurring when deployed using CentOS virtual host **(bug)**.
- [ ] Sometimes, the email OTP gets sent to spam.
- [ ] After searching for a product, clicking on the product sometimes displays a different product **(database bug)**.

### Notes:
> We didn't use any API to obtain the product images. Instead, we manually downloaded the images and typed in the product names. Then add to the database

## 🛠 Tech used:
- HTML
- CSS
- JavaScript
- PHP
- SCSS
- Xampp Control Panel:
  - Database: MariaDB (MySQL)
- Deployment: CentOS virtual host

## Color Reference

| Color             | Hex                                                                |
| ----------------- | ------------------------------------------------------------------ |
| Blue| ![#8dd1ff](https://via.placeholder.com/10/8dd1ff?text=+) #8dd1ff |
| White | ![#fff](https://via.placeholder.com/10/fff?text=+) #fff |

## Overview

<div align="center">
  <div>
    <img alt="Homepage" src="./assets/homepage.png" />
    <img alt="Product-list" src="./assets/product-list.pngg" />
    <img alt="Product-list2" src="./assets/product-list2.png" />
    <img alt="Product-Overview" src="./assets/product-overview.png" />
    <img alt="Account-Overview" src="./assets/account-overview.png" />
    <img alt="Account-Profie" src="./assets/account-profile.png" />
    <img alt="Account-Order" src="./assets/account-order.png" />
    <img alt="Cart" src="./assets/cart.png" />
    <img alt="Cart2" src="./assets/cart2.png" />
  </div>
  <br><br>
  <div>
    <h2><a href="./assets/Ozon%20Shopping%20Site.pdf" target="_blank">Homepage Overview PDF</a><br>
    <a href="./assets/Ozon%20Shopping%20Site-about.pdf" target="_blank">About Overview PDF</a><br>
    <a href="./assets/Ozon%20Shopping%20Site-product.pdf" target="_blank">Product Overview PDF</a><br>
    <a href="./assets/Login.pdf" target="_blank">Login Overview PDF</a></h2>
  </div>
</div>
