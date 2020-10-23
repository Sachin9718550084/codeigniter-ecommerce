<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['admin']="Admin/LoginController/index";
$route['admin/forget-password']="Admin/LoginController/forget";
$route['admin/dashboard']="Admin/Dashboard/index";
$route['admin/change-password']="Admin/Dashboard/change";
$route['admin/change-profile']="Admin/Dashboard/profile";
$route['admin/reset-password/(:any)']="Admin/LoginController/reset/$1";
$route['admin/logout']="Admin/Dashboard/logout";

//Sales
$route['admin/sales']="Admin/Sales/index";
$route['admin/sales/create']="Admin/Sales/create";
$route['admin/sales/store']="Admin/Sales/store";
$route['admin/sales/delete/(:any)']="Admin/Sales/delete/$1";
$route['admin/sales/edit/(:any)']="Admin/Sales/edit/$1";
$route['admin/sales/update/(:any)']="Admin/Sales/update/$1";

//Orders
$route['admin/orders']="Admin/Orders/index";
$route['admin/orders/edit/(:any)']="Admin/Orders/edit/$1";
$route['admin/orders/update/(:any)']="Admin/Orders/update/$1";

//Sliders
$route['admin/sliders']="Admin/Slider/index";
$route['admin/sliders/create']="Admin/Slider/create";
$route['admin/sliders/store']="Admin/Slider/store";
$route['admin/sliders/delete/(:any)']="Admin/Slider/delete/$1";
$route['admin/sliders/edit/(:any)']="Admin/Slider/edit/$1";
$route['admin/sliders/update/(:any)']="Admin/Slider/update/$1";

//Feedbacks
$route['admin/feedbacks']="Admin/Feedback/index";
$route['admin/feedbacks/create']="Admin/Feedback/create";
$route['admin/feedbacks/store']="Admin/Feedback/store";
$route['admin/feedbacks/delete/(:any)']="Admin/Feedback/delete/$1";
$route['admin/feedbacks/edit/(:any)']="Admin/Feedback/edit/$1";
$route['admin/feedbacks/update/(:any)']="Admin/Feedback/update/$1";


//Setting
$route['admin/settings']="Admin/Setting/index";
$route['admin/settings/create']="Admin/Setting/create";
$route['admin/settings/store']="Admin/Setting/store";
$route['admin/settings/delete/(:any)']="Admin/Setting/delete/$1";
$route['admin/settings/edit/(:any)']="Admin/Setting/edit/$1";
$route['admin/settings/update/(:any)']="Admin/Setting/update/$1";


//Blog-categories
$route['admin/blog-categories']="Admin/BlogCategories/index";
$route['admin/blog-categories/create']="Admin/BlogCategories/create";
$route['admin/blog-categories/store']="Admin/BlogCategories/store";
$route['admin/blog-categories/delete/(:any)']="Admin/BlogCategories/delete/$1";
$route['admin/blog-categories/edit/(:any)']="Admin/BlogCategories/edit/$1";
$route['admin/blog-categories/update/(:any)']="Admin/BlogCategories/update/$1";


//Blogs
$route['admin/blogs']="Admin/Blogs/index";
$route['admin/blogs/create']="Admin/Blogs/create";
$route['admin/blogs/store']="Admin/Blogs/store";
$route['admin/blogs/delete/(:any)']="Admin/Blogs/delete/$1";
$route['admin/blogs/edit/(:any)']="Admin/Blogs/edit/$1";
$route['admin/blogs/update/(:any)']="Admin/Blogs/update/$1";


//Testimonial
$route['admin/testimonials']="Admin/Testimonial/index";
$route['admin/testimonials/create']="Admin/Testimonial/create";
$route['admin/testimonials/store']="Admin/Testimonial/store";
$route['admin/testimonials/delete/(:any)']="Admin/Testimonial/delete/$1";
$route['admin/testimonials/edit/(:any)']="Admin/Testimonial/edit/$1";
$route['admin/testimonials/update/(:any)']="Admin/Testimonial/update/$1";

//Gallery
$route['admin/galleries']="Admin/Gallery/index";
$route['admin/galleries/create']="Admin/Gallery/create";
$route['admin/galleries/store']="Admin/Gallery/store";
$route['admin/galleries/delete/(:any)']="Admin/Gallery/delete/$1";
$route['admin/galleries/edit/(:any)']="Admin/Gallery/edit/$1";
$route['admin/galleries/update/(:any)']="Admin/Gallery/update/$1";

//Portfolio
$route['admin/portfolios']="Admin/Portfolio/index";
$route['admin/portfolios/create']="Admin/Portfolio/create";
$route['admin/portfolios/store']="Admin/Portfolio/store";
$route['admin/portfolios/delete/(:any)']="Admin/Portfolio/delete/$1";
$route['admin/portfolios/edit/(:any)']="Admin/Portfolio/edit/$1";
$route['admin/portfolios/update/(:any)']="Admin/Portfolio/update/$1";

//OurTeam
$route['admin/our-teams']="Admin/OurTeam/index";
$route['admin/our-teams/create']="Admin/OurTeam/create";
$route['admin/our-teams/store']="Admin/OurTeam/store";
$route['admin/our-teams/delete/(:any)']="Admin/OurTeam/delete/$1";
$route['admin/our-teams/edit/(:any)']="Admin/OurTeam/edit/$1";
$route['admin/our-teams/update/(:any)']="Admin/OurTeam/update/$1";

//OurClient
$route['admin/our-clients']="Admin/OurClient/index";
$route['admin/our-clients/create']="Admin/OurClient/create";
$route['admin/our-clients/store']="Admin/OurClient/store";
$route['admin/our-clients/delete/(:any)']="Admin/OurClient/delete/$1";
$route['admin/our-clients/edit/(:any)']="Admin/OurClient/edit/$1";
$route['admin/our-clients/update/(:any)']="Admin/OurClient/update/$1";

//FaqCategories
$route['admin/faq-categories']="Admin/FaqCategories/index";
$route['admin/faq-categories/create']="Admin/FaqCategories/create";
$route['admin/faq-categories/store']="Admin/FaqCategories/store";
$route['admin/faq-categories/delete/(:any)']="Admin/FaqCategories/delete/$1";
$route['admin/faq-categories/edit/(:any)']="Admin/FaqCategories/edit/$1";
$route['admin/faq-categories/update/(:any)']="Admin/FaqCategories/update/$1";

//Faq
$route['admin/faqs']="Admin/Faq/index";
$route['admin/faqs/create']="Admin/Faq/create";
$route['admin/faqs/store']="Admin/Faq/store";
$route['admin/faqs/delete/(:any)']="Admin/Faq/delete/$1";
$route['admin/faqs/edit/(:any)']="Admin/Faq/edit/$1";
$route['admin/faqs/update/(:any)']="Admin/Faq/update/$1";

//CMS
$route['admin/cms']="Admin/CMS/index";
$route['admin/cms/create']="Admin/CMS/create";
$route['admin/cms/store']="Admin/CMS/store";
$route['admin/cms/delete/(:any)']="Admin/CMS/delete/$1";
$route['admin/cms/edit/(:any)']="Admin/CMS/edit/$1";
$route['admin/cms/update/(:any)']="Admin/CMS/update/$1";

//Categories
$route['admin/categories']="Admin/Categories/index";
$route['admin/categories/create']="Admin/Categories/create";
$route['admin/categories/store']="Admin/Categories/store";
$route['admin/categories/delete/(:any)']="Admin/Categories/delete/$1";
$route['admin/categories/edit/(:any)']="Admin/Categories/edit/$1";
$route['admin/categories/update/(:any)']="Admin/Categories/update/$1";

//Brand
$route['admin/brands']="Admin/Brand/index";
$route['admin/brands/create']="Admin/Brand/create";
$route['admin/brands/store']="Admin/Brand/store";
$route['admin/brands/delete/(:any)']="Admin/Brand/delete/$1";
$route['admin/brands/edit/(:any)']="Admin/Brand/edit/$1";
$route['admin/brands/update/(:any)']="Admin/Brand/update/$1";

//Manufacture
$route['admin/manufacture']="Admin/Manufacture/index";
$route['admin/manufacture/create']="Admin/Manufacture/create";
$route['admin/manufacture/store']="Admin/Manufacture/store";
$route['admin/manufacture/delete/(:any)']="Admin/Manufacture/delete/$1";
$route['admin/manufacture/edit/(:any)']="Admin/Manufacture/edit/$1";
$route['admin/manufacture/update/(:any)']="Admin/Manufacture/update/$1";

//AttributeGroup
$route['admin/attribute-groups']="Admin/AttributeGroup/index";
$route['admin/attribute-groups/create']="Admin/AttributeGroup/create";
$route['admin/attribute-groups/store']="Admin/AttributeGroup/store";
$route['admin/attribute-groups/delete/(:any)']="Admin/AttributeGroup/delete/$1";
$route['admin/attribute-groups/edit/(:any)']="Admin/AttributeGroup/edit/$1";
$route['admin/attribute-groups/update/(:any)']="Admin/AttributeGroup/update/$1";

//Attribute
$route['admin/attributes']="Admin/Attribute/index";
$route['admin/attributes/create']="Admin/Attribute/create";
$route['admin/attributes/store']="Admin/Attribute/store";
$route['admin/attributes/delete/(:any)']="Admin/Attribute/delete/$1";
$route['admin/attributes/edit/(:any)']="Admin/Attribute/edit/$1";
$route['admin/attributes/update/(:any)']="Admin/Attribute/update/$1";

//Product
$route['admin/products']="Admin/Products/index";
$route['admin/products/create']="Admin/Products/create";
$route['admin/products/store']="Admin/Products/store";
$route['admin/products/delete/(:any)']="Admin/Products/delete/$1";
$route['admin/products/edit/(:any)']="Admin/Products/edit/$1";
$route['admin/products/update/(:any)']="Admin/Products/update/$1";


//Static Page
//$route['about-us']="StaticPage/about";


//$route['software-costomization']="StaticPage/softwareCustomization";
//$route['ios-and-mac-os-compatible-custom-app']="StaticPage/iosAndMacOS";
//$route['hardware-customization']="StaticPage/hardwareCustomization";
//$route['bespoke-engraving-on-all-apple-products']="StaticPage/bespokeEngravingOnAllApple";
//$route['apple-giveback']="StaticPage/appleGiveBack";
//$route['applecare-protection']="StaticPage/applecareProtection";
//$route['bespoke-configured']="StaticPage/bespokeConfigured";
// $route['repair-and-warranty']="StaticPage/repairAndWarranty";
$route['data-save-after-payment']="User/User/DataSaveAfterPayment";

$route['payment-gateway']="User/User/paymentGateway";
$route['contact-us-post']="StaticPage/contactUsPost";
$route['get-via-check-box-product']="Admin/Ajax/productAttribute";
$route['shop']="Product/Product/index";
$route['shop/ajaxPaginationData/(:any)']="Product/Product/ajaxPaginationData/$1";
$route['category/(:any)']="Product/Category/index/$1";
$route['category/ajaxPaginationData/(:any)/(:any)']="Product/Category/ajaxPaginationData/$1/$2";
$route['product/(:any)']="Product/Product/single/$1";
$route['sign-in']="User/Login/index";
$route['sign-up']="User/Login/register";
$route['forget-password']="User/Login/forgetPassword";
$route['login-post']="User/Login/loginPost";
$route['login-post-guest']="User/Login/loginPostGuest";
$route['register-post']="User/Login/registerPost";
$route['logout']="User/User/logout";
$route['my-account']="User/User/index";
$route['change-password']="User/User/changePassword";
$route['change-profile']="User/User/changeProfile";
$route['my-rating']="User/User/myRating";
$route['my-orders']="User/User/myOrders";
$route['order-details/(:any)']="User/User/orderDetail/$1";
$route['user-checkout']="User/User/userCheckout";
$route['cart']="User/Cart/index";
$route['checkout']="User/Cart/checkout";
$route['wishlist']="User/WishList/index";
$route['add-to-cart/(:any)']="User/Cart/add/$1";
$route['cart-delete/(:any)']="User/Cart/delete/$1";
$route['add-to-wishlist/(:any)']="User/WishList/add/$1";
$route['delete-to-wishlist/(:any)']="User/WishList/delete/$1";
$route['apply-coupon-code']="User/Cart/couponApply";
$route['remove-coupon-code']="User/Cart/couponRemove";

$route['no-found']="StaticPage/noFound";
$route['(:any)']="StaticPage/dynamicPage/$1";

$route['default_controller'] = 'StaticPage';
$route['404_override'] = 'StaticPage/noFound';
$route['translate_uri_dashes'] = FALSE;
