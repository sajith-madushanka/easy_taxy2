@extends('home')
<main>
    <div class="bg-dark">
        <div class="container px-vw-6 py-vh-5 container-2">
            <div class="row d-flex align-items-center">
                <div class="col-12 col-lg-7 text-lg-center" data-aos="fade-right">

                    <img src="img/webp/abstract9.webp"     width= "81%"  alt="abstract image" class="img-fluid position-relative rounded-5 shadow aos-init aos-animate" data-aos="fade-up">

                </div>
                <div class="col-12 col-lg-5" data-aos="fade-left">
                    <div id='dropdowntitle' class='dropdowntitle'>Full Name</div>
                    <input  class="form_field"  type="text" placeholder="Enter Name" >
                       
                    </input>
                    <div id='dropdowntitle' class='dropdowntitle'> Mobile Number in Use </div>
                    <div  class="form_field"  style="padding: 0;" >
                        <input id="telinput" style="border: none;"   class="form_field" type="tel" >
                    
                    </input>
                    </div>
                   
  
                    <div id='dropdowntitle' class='dropdowntitle'>Note</div>
                    <input   class="form_field" type="text" placeholder="Enter Note" >
                       
                    </input>
                   
                    
                    
                    <div class="price-box">
                        <h2 class="price-2" data-aos="zoom-in-left">6000 LKR</h2>
                    </div>
                    <div class="price-box">
                        <a href="#"  class="btn btn-xl btn-light select-book">Proceed
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
</main>



<style>
    .dropdowntitle {
        color: #666666;
        text-align: left;
        vertical-align: text-top;
        font-size: 13px;
        font-family: inter, sans-serif;
        line-height: 18px;
        border-style: hidden;
        outline: none;
        padding: 19px;
    }

    .custom-select {
        overflow: hidden;
    }

    .form_field {
        appearance: none;
        /* Remove default appearance */
        -webkit-appearance: none;
        /* For older versions of Chrome and Safari */
        -moz-appearance: none;
        /* For older versions of Firefox */
        padding: 10px;
        /* Adjust padding as needed */
        background-color: white;
        /* White background */
        color: black;
        /* Text color */
        font-size: 16px;
        /* Font size */
        cursor: pointer;
        /* Pointer cursor on hover */
        outline: none;
        /* Remove outline */
        position: relative;
        /* Relative positioning for pseudo elements */
        /* Set width as needed */
        border-radius: 11px;

        width: 86%


    }


    /* Custom arrow */
    select::after {
        content: '';
        border: solid yellow;
        border-width: 0 2px 2px 0;
        display: inline-block;
        padding: 3px;
        position: absolute;
        right: 10px;
        /* Adjust position */
        top: 50%;
        /* Center vertically */
        transform: translateY(-50%) rotate(45deg);
        /* Rotate to form arrow */
    }



    /* Styles for dropdown menu */
    select option {
        background-color: white;
        /* White background */
        color: black;
        /* Text color */
        padding: 10px;
        /* Adjust padding */
        font-size: 16px;
        /* Match font size with select */
        border: none;
        /* Remove default option borders */
    }
</style>