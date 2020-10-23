

jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$.validator.addMethod("regex", function(value, element, regexpr) {          
    return regexpr.test(value);
}, "Please enter data.");

$( "#login-form" ).validate({
  rules: {
   
    email:{
    	required:true,
    	email:true
    },
    password:{
    	required:true
    }
  },

  submitHandler: function(form) {
	    form.submit();
	}
});


$( "#forgetpassword-form" ).validate({
  rules: {
   
    email:{
    	required:true,
    	email:true
    }
  },

  submitHandler: function(form) {
	    form.submit();
	}
});

$( "#resetpassword-form" ).validate({
  rules: {
   
    new_password:{
    	required:true
    },
    confirm_password:{
    	required:true,
    	equalTo: "#new_password"
    }
  },

  submitHandler: function(form) {
	    form.submit();
	}
});

$( "#create-slider" ).validate({
  rules: {
    name: {
      required: true
    },
    image:{
    	required:true,
    	extension:"jpg|jpeg|png|gif|bmp"
    }
  },
 
  submitHandler: function(form) {
	    form.submit();
	}
});


$( "#edit-slider" ).validate({
  rules: {
    name: {
      required: true
    },
    image:{
    	required:false,
    	extension:"jpg|jpeg|png|gif|bmp"
    }
  },
  
  submitHandler: function(form) {
	    form.submit();
	}
});

$( "#create-feedbacks,#edit-feedbacks" ).validate({
  rules: {
    name: {
      required: true
    },
    mobile:{
    	phoneUS: true,
    	required:true
    },
    email:{
    	required:true,
    	email:true
    },
    message:{
    	required:true
    }
  },
  messages:{
  	name: {
      required: "Name is required"
    }
  },
  submitHandler: function(form) {
	    form.submit();
	}
});


$( "#blog-cat" ).validate({
  rules: {
    title: {
      required: true
    },
    image:{
    	required:true,
    	extension:"jpg|jpeg|png|gif|bmp"
    },
    seo_url:{
    	required:true,
    	regex: /^[a-zA-Z0-9-_]+$/,
        minlength: 3,
        maxlength: 300
    },
    publish:{
    	required:true
    }
  },
  
  submitHandler: function(form) {
	    form.submit();
	}
});

$( "#edit-blog-cat" ).validate({
  rules: {
    title: {
      required: true
    },
    image:{
    	required:false,
    	extension:"jpg|jpeg|png|gif|bmp"
    },
    seo_url:{
    	required:true,
    	regex: /^[a-zA-Z0-9-_]+$/,
        minlength: 3,
        maxlength: 300
    },
    publish:{
    	required:true
    }
  },
  
  submitHandler: function(form) {
	    form.submit();
	}
});

$( "#blogs" ).validate({
  rules: {
    title: {
      required: true
    },
    image:{
    	required:true,
    	extension:"jpg|jpeg|png|gif|bmp"
    },
    seo_url:{
    	required:true,
    	regex: /^[a-zA-Z0-9-_]+$/,
        minlength: 3,
        maxlength: 300
    },
    publish:{
    	required:true
    },
    blog_category_id:{
    	required:true
    },
    featureImage:{
        required:true,
        extension:"jpg|jpeg|png|gif|bmp"
    }
  },
  
  submitHandler: function(form) {
	    form.submit();
	}
});
$( "#edit-blogs" ).validate({
  rules: {
    title: {
      required: true
    },
    image:{
    	required:false,
    	extension:"jpg|jpeg|png|gif|bmp"
    },
    seo_url:{
    	required:true
    },
    publish:{
    	required:true
    },
    blog_category_id:{
    	required:true
    },
    featureImage:{
        required:false,
        extension:"jpg|jpeg|png|gif|bmp"
    }
  },
  
  submitHandler: function(form) {
	    form.submit();
	}
});

$( "#testimonial" ).validate({
  rules: {
    name: {
      required: true
    },
    image:{
    	required:true,
    	extension:"jpg|jpeg|png|gif|bmp"
    },
    message:{
    	required:true
    }
  },
  
  submitHandler: function(form) {
	    form.submit();
	}
});

$( "#edit-testimonial" ).validate({
  rules: {
    name: {
      required: true
    },
    image:{
    	required:false,
    	extension:"jpg|jpeg|png|gif|bmp"
    },
    message:{
    	required:true
    }
  },
  
  submitHandler: function(form) {
	    form.submit();
	}
});

$( "#gallery" ).validate({
  rules: {
    title: {
      required: true
    },
    image:{
    	required:true,
    	extension:"jpg|jpeg|png|gif|bmp"
    },
    description:{
    	required:true
    }
  },
  
  submitHandler: function(form) {
	    form.submit();
	}
});

$( "#edit-gallery" ).validate({
  rules: {
    title: {
      required: true
    },
    image:{
    	required:false,
    	extension:"jpg|jpeg|png|gif|bmp"
    },
    description:{
    	required:true
    }
  },
  
  submitHandler: function(form) {
	    form.submit();
	}
});

$( "#portfolio" ).validate({
  rules: {
    title: {
      required: true
    },
    image:{
    	required:true,
    	extension:"jpg|jpeg|png|gif|bmp"
    },
    description:{
    	required:true
    }
  },
  
  submitHandler: function(form) {
	    form.submit();
	}
});


$( "#edit-portfolio" ).validate({
  rules: {
    title: {
      required: true
    },
    image:{
    	required:false,
    	extension:"jpg|jpeg|png|gif|bmp"
    },
    description:{
    	required:true
    }
  },
  
  submitHandler: function(form) {
	    form.submit();
	}
});


$( "#our-team" ).validate({
  rules: {
    name: {
      required: true
    },
    image:{
    	required:true,
    	extension:"jpg|jpeg|png|gif|bmp"
    },
    email:{
    	required:true,
    	email:true
    },
    mobile:{
    	required:true,
    	phoneUS: true
    }
  },
  
  submitHandler: function(form) {
	    form.submit();
	}
});

$( "#edit-our-team" ).validate({
  rules: {
    name: {
      required: true
    },
    image:{
    	required:false,
    	extension:"jpg|jpeg|png|gif|bmp"
    },
    email:{
    	required:true,
    	email:true
    },
    mobile:{
    	required:true,
    	phoneUS: true
    }
  },
  
  submitHandler: function(form) {
	    form.submit();
	}
});

$( "#our-client" ).validate({
  rules: {
    title: {
      required: true
    },
    image:{
    	required:true,
    	extension:"jpg|jpeg|png|gif|bmp"
    }
  },
  
  submitHandler: function(form) {
	    form.submit();
	}
});

$( "#edit-our-client" ).validate({
  rules: {
    name: {
      required: true
    },
    image:{
    	required:false,
    	extension:"jpg|jpeg|png|gif|bmp"
    }
  },
  
  submitHandler: function(form) {
	    form.submit();
	}
});

$( "#faq,#edit-faq" ).validate({
  rules: {
    question: {
      required: true
    },
    answer:{
    	required: true
    }
  },
  
  submitHandler: function(form) {
	    form.submit();
	}
});

$( "#category-form" ).validate({
  rules: {
    title: {
      required: true
    },
    image:{
    	required:true,
    	extension:"jpg|jpeg|png|gif|bmp"
    },
    seo_url:{
    	required:true,
    	regex: /^[a-zA-Z0-9-_]+$/,
        minlength: 3,
        maxlength: 300
    },
    publish:{
    	required:true
    }
  },
  
  submitHandler: function(form) {

  		// let seo=$("#category-form input[name=seo_url]").val();
  		// url="";
  		// data={seo:seo};
  		
  		// $.post(url,data,function(rdata){
  		// 	if(rdata==true){
  		// 		form.submit();
  		// 	}else{
  		// 		alert("hi")
  		// 		$("#category-form input[name=seo_url]").after("<label class='error'>Already Exist on Database<label>")
  		// 	}
  		// })
	    form.submit();
	}
});
// $("#category-form input[name=seo_url]").on("change click",function(){
// 	$(this).next("label.error").remove()
// });


$( "#edit-category-form" ).validate({
  rules: {
    title: {
      required: true
    },
    image:{
    	required:false,
    	extension:"jpg|jpeg|png|gif|bmp"
    },
    seo_url:{
    	required:true,
    	regex: /^[a-zA-Z0-9-_]+$/,
        minlength: 3,
        maxlength: 300
    },
    publish:{
    	required:true
    }
  },
  
  submitHandler: function(form) {
	    form.submit();
	}
});

$( "#brand-form" ).validate({
  rules: {
    title: {
      required: true
    },
    image:{
    	required:true,
    	extension:"jpg|jpeg|png|gif|bmp"
    },
    seo_url:{
    	required:true,
    	regex: /^[a-zA-Z0-9-_]+$/,
        minlength: 3,
        maxlength: 300
    },
    publish:{
    	required:true
    }
  },
  
  submitHandler: function(form) {
	    form.submit();
	}
});


$( "#manufacture" ).validate({
  rules: {
    title: {
      required: true
    },
    image:{
    	required:true,
    	extension:"jpg|jpeg|png|gif|bmp"
    },
    seo_url:{
    	required:true,
    	regex: /^[a-zA-Z0-9-_]+$/,
        minlength: 3,
        maxlength: 300
    },
    publish:{
    	required:true
    }
  },
  
  submitHandler: function(form) {
	    form.submit();
	}
});


$( "#edit-manufacture" ).validate({
  rules: {
    title: {
      required: true
    },
    image:{
    	required:false,
    	extension:"jpg|jpeg|png|gif|bmp"
    },
    seo_url:{
    	required:true,
    	regex: /^[a-zA-Z0-9-_]+$/,
        minlength: 3,
        maxlength: 300
    },
    publish:{
    	required:true
    }
  },
  
  submitHandler: function(form) {
	    form.submit();
	}
});

$( "#setting-form,#edit-setting-form" ).validate({
  rules: {
    name: {
      required: true
    },
    value:{
    	required:true
    }
  },
  
  submitHandler: function(form) {
	    form.submit();
	}
});

$( "#change-password" ).validate({
  rules: {
    old_password: {
      required: true
    },
    new_password: {
      required: true
    },
    confirm_password:{
    	required:true,
    	equalTo: "#cnew_password"
    }
  },
  
  submitHandler: function(form) {
	    form.submit();
	}
});



