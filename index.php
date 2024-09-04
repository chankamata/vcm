<?php /*Template Name: Homepage */
get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/index.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/blog-card.css">

<section class="hero-banner l-_hpx">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="header_content mb_60">
                <div class="text">
                    <div class="ht h-1"><span>Your Celebrity</span> Source</div>
                    <p class="m-0">We empower both established and rising talents to achieve their full potential.</p>
                </div>
                <a href="<?php echo $redirect_url; ?>/contact-us" target="_blank"
                    class="desk_top cta_green c_r c_btn">contact
                    us</a>
            </div>
            <div class="row">
                <div class="cus-lg-9">
                    <div class="main_content">
                        <div class="bg"></div>
                        <div class="image">
                            <a href="http://" target="_blank" rel="noopener noreferrer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="101" viewBox="0 0 100 101"
                                    fill="none">
                                    <circle cx="50" cy="50.5" r="50" fill="#F2F7E0" />
                                    <g clip-path="url(#clip0_869_4973)">
                                        <path
                                            d="M41.3597 29.4702C37.3928 27.1947 34.1768 29.0588 34.1768 33.6304V67.3664C34.1768 71.9426 37.3928 73.8042 41.3597 71.5309L70.8467 54.6203C74.8149 52.3441 74.8149 48.6562 70.8467 46.3805L41.3597 29.4702Z"
                                            fill="#2E3094" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_869_4973">
                                            <rect width="44" height="44" fill="white" transform="translate(32 28.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <img src="<?php echo $asset_path; ?>/assets/img/general/border-up.png" alt="Border Up"
                            class="bd border-up d-none">
                    </div>
                    <a href="<?php echo $redirect_url; ?>/contact-us" target="_blank"
                        class="mobile cta_green c_r c_btn">contact
                        us</a>
                </div>
                <div class="cus-lg-2">
                    <div class="number">
                        <div class="n_card">
                            <div class="ht h-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="51" height="50" viewBox="0 0 51 50"
                                    fill="none">
                                    <path
                                        d="M37.9453 34.1718L35.7406 44.4077C35.4297 45.8468 34.1578 46.8749 32.6859 46.8749H24.4172C21.0531 46.8749 19.6063 45.6171 17.6875 43.7499H15.3438V31.2499H16.9578C20.6609 28.7296 22.6438 25.1077 23.7422 21.4812C23.925 20.8812 24.4375 20.4202 25.0641 20.3733C28.0766 20.1468 30.3031 22.9202 29.5391 25.739C29.0141 27.6765 28.5219 29.4108 27.5438 31.2483H35.5844C37.1234 31.2499 38.2688 32.6687 37.9453 34.1718Z"
                                        fill="#96CE47" />
                                    <path
                                        d="M25.9203 4.05332L27.8047 7.87207C27.8735 8.01113 28.0047 8.10645 28.1578 8.12832L32.3719 8.74082C32.7563 8.79707 32.9094 9.26894 32.6313 9.54082L29.5813 12.5143C29.4703 12.6221 29.4203 12.7768 29.4469 12.9299L30.1672 17.1268C30.2328 17.5096 29.8313 17.8018 29.4875 17.6205L25.7172 15.6393C25.5813 15.5674 25.4172 15.5674 25.2813 15.6393L21.511 17.6205C21.1672 17.8018 20.7657 17.5096 20.8313 17.1268L21.5516 12.9299C21.5782 12.7783 21.5266 12.6221 21.4172 12.5143L18.3672 9.54082C18.0891 9.26894 18.2422 8.79707 18.6266 8.74082L22.8407 8.12832C22.9938 8.10645 23.125 8.00957 23.1938 7.87207L25.0782 4.05332C25.2516 3.70488 25.7485 3.70488 25.9203 4.05332Z"
                                        fill="#96CE47" />
                                    <path
                                        d="M39.9827 7.79082L41.8671 11.6096C41.9359 11.7486 42.0671 11.8439 42.2202 11.8658L46.4343 12.4783C46.8187 12.5346 46.9718 13.0064 46.6937 13.2783L43.6452 16.2502C43.5343 16.358 43.4843 16.5127 43.5109 16.6658L44.2312 20.8627C44.2968 21.2455 43.8952 21.5377 43.5515 21.3564L39.7812 19.3752C39.6452 19.3033 39.4812 19.3033 39.3452 19.3752L35.5749 21.3564C35.2312 21.5377 34.8296 21.2455 34.8952 20.8627L35.6156 16.6658C35.6421 16.5143 35.5906 16.358 35.4812 16.2502L32.4312 13.2768C32.1531 13.0049 32.3062 12.533 32.6906 12.4768L36.9046 11.8643C37.0577 11.8424 37.189 11.7455 37.2577 11.608L39.1421 7.78926C39.314 7.44238 39.8109 7.44238 39.9827 7.79082Z"
                                        fill="#96CE47" />
                                    <path
                                        d="M11.8578 7.79063L13.7422 11.6094C13.811 11.7484 13.9422 11.8437 14.0953 11.8656L18.3094 12.4781C18.6938 12.5344 18.8469 13.0062 18.5688 13.2781L15.5203 16.25C15.4094 16.3578 15.3594 16.5125 15.386 16.6656L16.1063 20.8625C16.1719 21.2453 15.7703 21.5375 15.4266 21.3562L11.6563 19.375C11.5203 19.3031 11.3563 19.3031 11.2203 19.375L7.45003 21.3562C7.10628 21.5375 6.70472 21.2453 6.77035 20.8625L7.49066 16.6656C7.51722 16.5141 7.46566 16.3578 7.35628 16.25L4.30472 13.2781C4.0266 13.0062 4.17972 12.5344 4.5641 12.4781L8.77816 11.8656C8.93285 11.8437 9.0641 11.7469 9.13285 11.6094L11.0172 7.79063C11.1891 7.44219 11.686 7.44219 11.8578 7.79063Z"
                                        fill="#96CE47" />
                                    <path
                                        d="M7.53125 29.6875H12.2188C12.65 29.6875 13 30.0375 13 30.4688V44.5312C13 44.9625 12.65 45.3125 12.2188 45.3125H7.53125C7.1 45.3125 6.75 44.9625 6.75 44.5312V30.4688C6.75 30.0375 7.1 29.6875 7.53125 29.6875Z"
                                        fill="#96CE47" />
                                </svg>
                                <span class="count" data-target="150">0</span><span>+</span>
                            </div>
                            <p class="m-0">SATISFIED CUSTOMERS</p>
                        </div>
                        <div class="n_card">
                            <div class="ht h-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24.5206 8.90619C24.7231 8.41864 24.9641 7.94737 25.2423 7.4958L24.3972 5.59491L26.6361 3.35599L28.537 4.20119C29.4427 3.64305 30.4283 3.23482 31.4617 2.98923L32.2112 1.04688H35.3782L36.1246 2.98923C37.1579 3.23482 38.1434 3.64305 39.0492 4.20119L40.9501 3.35599L43.1891 5.59491L42.347 7.4958C42.9052 8.40158 43.3134 9.38717 43.559 10.4236L45.4982 11.17V14.3371L43.559 15.0833C43.3134 16.1168 42.9021 17.1023 42.347 18.0081L43.1891 19.9089L40.9501 22.148L39.0492 21.3059C38.4087 21.702 37.7249 22.0226 37.0125 22.2631V17.2451C38.4099 16.242 39.3203 14.6031 39.3203 12.752C39.3203 9.69972 36.8454 7.22786 33.7931 7.22786C32.2362 7.22786 30.8304 7.87099 29.8266 8.90619H24.5206ZM9.54362 13.8174V10.4748H29.6797V14.6738C29.6797 15.5401 30.382 16.2425 31.2483 16.2425H35.4439V44.046H31.9709V19.5816C31.9709 19.1655 31.8056 18.7666 31.5115 18.4724L27.3159 14.2768C27.0218 13.9827 26.6227 13.8174 26.2068 13.8174H9.54362ZM35.4439 14.6738H31.2483V10.4748L35.4439 14.6738ZM30.4022 21.1502V48.9537H4.50195V15.386H24.6381V19.5816C24.6381 20.4479 25.3404 21.1502 26.2068 21.1502H30.4022ZM17.4535 41.4548C22.5676 41.4548 26.7371 37.2854 26.7371 32.1713C26.7371 27.0572 22.5676 22.8849 17.4535 22.8849C12.3394 22.8849 8.16715 27.0572 8.16715 32.1713C8.16715 37.2854 12.3394 41.4548 17.4535 41.4548ZM17.4535 39.8862C13.2034 39.8862 9.73578 36.4214 9.73578 32.1713C9.73578 27.921 13.2032 24.4535 17.4535 24.4535C21.7036 24.4535 25.1684 27.9212 25.1684 32.1713C25.1684 36.4213 21.7035 39.8862 17.4535 39.8862ZM16.2345 32.9885L14.1595 30.9135C13.6221 30.3761 12.7494 30.3761 12.212 30.9135C11.6745 31.4537 11.6745 32.3236 12.212 32.8611L15.2621 35.914C15.7996 36.4515 16.6722 36.4515 17.2097 35.914C19.0492 34.0745 20.8667 32.2156 22.6978 30.3678C23.2325 29.8276 23.2297 28.9577 22.6922 28.423C22.1548 27.8883 21.2822 27.891 20.7474 28.4284L16.2345 32.9885ZM30.4022 19.5816H26.2068V15.386L30.4022 19.5816Z"
                                        fill="#96CE47" />
                                </svg>
                                <span class="count" data-target="2000">0</span><span>+</span>
                            </div>
                            <p class="m-0">PROJECTS COMPLETED</p>
                        </div>
                        <div class="n_card">
                            <div class="ht h-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="51" height="50" viewBox="0 0 51 50"
                                    fill="none">
                                    <path
                                        d="M21.8428 42.0264C21.0465 43.4053 20.2507 44.7826 19.4551 46.1582C19.0488 46.8613 18.252 46.9893 17.5635 46.6328C16.5869 46.0234 17.0244 44.7578 17.1064 44.8047L19.4922 40.6689C19.6757 40.3643 19.9715 40.1439 20.3159 40.055C20.6603 39.9662 21.0257 40.0161 21.3337 40.1939C21.6417 40.3718 21.8676 40.6634 21.9628 41.0061C22.058 41.3488 22.0149 41.7151 21.8428 42.0264ZM25.2666 42.4395C24.9561 42.2827 24.5975 42.2501 24.2638 42.3485C23.9302 42.4468 23.6465 42.6686 23.4707 42.9688C22.8975 43.9609 22.252 45.2393 21.6299 46.1611C21.2939 46.7471 21.5449 47.5635 22.0996 47.9189C22.8066 48.2617 23.584 48.2002 24.0107 47.46C24.582 46.4697 25.2324 45.1816 25.8535 44.2637C26.2295 43.5312 25.8984 42.8711 25.2666 42.4395ZM13.3906 35.5781C13.078 35.4005 12.708 35.3531 12.3607 35.4463C12.0134 35.5395 11.7168 35.7658 11.5352 36.0762L8.54102 41.2617C8.3915 41.5616 8.35673 41.9058 8.44324 42.2295C8.52975 42.5532 8.73157 42.8342 9.01074 43.0195C9.71777 43.3613 10.4951 43.3008 10.9229 42.5596L13.8789 37.4336C14.0574 37.1221 14.1062 36.753 14.0149 36.4058C13.9235 36.0587 13.6993 35.7614 13.3906 35.5781ZM30.9033 45.5078L27.8838 43.7627C27.8656 44.2918 27.7174 44.8084 27.4521 45.2666L26.4619 46.9824C27.3408 47.4912 28.3496 48.0176 29.1963 48.5615C29.6 48.7716 30.0696 48.8162 30.5056 48.6858C30.9417 48.5555 31.3097 48.2603 31.5318 47.8631C31.7538 47.4659 31.8124 46.9977 31.6951 46.558C31.5778 46.1183 31.2938 45.7416 30.9033 45.5078ZM42.2246 15.9922L37.5117 18.7119L44.2256 30.3398L48.9375 27.6201L42.2246 15.9922ZM8.77539 17.6758L2.0625 29.3037L6.77344 32.0244L13.4883 20.3965L8.77539 17.6758ZM17.3691 37.874C17.0565 37.6979 16.6873 37.6511 16.3405 37.7436C15.9938 37.8361 15.697 38.0606 15.5137 38.3691L12.8408 43C12.7467 43.1544 12.6843 43.326 12.6575 43.5049C12.6306 43.6837 12.6397 43.8661 12.6843 44.0413C12.7289 44.2166 12.808 44.3812 12.9171 44.5254C13.0262 44.6696 13.163 44.7906 13.3195 44.8813C13.4759 44.9719 13.6489 45.0304 13.8283 45.0532C14.0077 45.076 14.1899 45.0628 14.3641 45.0143C14.5383 44.9658 14.701 44.8829 14.8428 44.7706C14.9845 44.6583 15.1024 44.5188 15.1895 44.3604L17.8643 39.7275C18.0408 39.4149 18.0874 39.0454 17.9938 38.6988C17.9003 38.3522 17.6741 38.0563 17.3643 37.875L17.3691 37.874ZM38.9766 31.5234L28.4062 25.4209L27.5166 25.6338C27.1904 25.7109 26.7148 26.5264 26.0391 27.6846C25.6484 28.3613 24.0605 31.1211 23.2803 31.6504C22.5498 32.1455 21.8418 32.1045 21.0342 30.9131C20.5911 30.2229 20.298 29.4474 20.1738 28.6367C20.0361 27.7471 20.168 27.2754 20.3584 26.5967C20.7783 25.1016 21.167 23.5879 21.5693 22.0869C21.6062 21.9479 21.6515 21.8112 21.7051 21.6777C20.6064 21.329 19.4779 21.0822 18.334 20.9404C17.348 20.8165 16.3509 20.8096 15.3633 20.9199L8.3125 33.125C8.91582 33.7113 9.46796 34.348 9.96289 35.0283C11.46 32.6436 15.123 33.1924 15.8379 35.9258C16.2501 35.8151 16.68 35.7867 17.1032 35.8423C17.5264 35.8978 17.9344 36.0363 18.304 36.2497C18.6736 36.4631 18.9975 36.7473 19.2572 37.086C19.5169 37.4247 19.7072 37.8113 19.8174 38.2236C20.6499 38.0008 21.5369 38.1177 22.2833 38.5485C23.0297 38.9794 23.5745 39.6891 23.7979 40.5215C24.4587 40.3423 25.1594 40.3769 25.7993 40.6204C26.4393 40.8639 26.9858 41.3038 27.3603 41.877C27.5053 41.784 27.6729 41.7325 27.8451 41.728C28.0172 41.7235 28.1873 41.7663 28.3369 41.8516C29.4355 42.4863 30.8906 43.2188 31.9043 43.9102C32.7998 44.3789 33.7314 44.0078 34.2568 43.1953C34.4706 42.7932 34.5208 42.3241 34.3969 41.8859C34.273 41.4477 33.9845 41.0743 33.5918 40.8438L28.377 37.833C28.2699 37.7715 28.176 37.6894 28.1006 37.5916C28.0252 37.4937 27.9698 37.382 27.9377 37.2627C27.9055 37.1435 27.8971 37.0191 27.913 36.8966C27.9289 36.7741 27.9687 36.6559 28.0303 36.5488C28.0918 36.4417 28.1739 36.3478 28.2717 36.2725C28.3696 36.1971 28.4813 36.1417 28.6006 36.1095C28.7198 36.0773 28.8442 36.0689 28.9667 36.0848C29.0892 36.1007 29.2074 36.1406 29.3145 36.2021L34.5352 39.2158C34.7343 39.3415 34.9568 39.4258 35.1893 39.4634C35.4218 39.501 35.6595 39.4913 35.8882 39.4348C36.1168 39.3784 36.3317 39.2763 36.52 39.1347C36.7082 38.9932 36.8659 38.8151 36.9837 38.6111C37.1014 38.4071 37.1767 38.1814 37.2051 37.9476C37.2335 37.7138 37.2143 37.4766 37.1488 37.2504C37.0833 37.0242 36.9728 36.8135 36.8239 36.631C36.675 36.4485 36.4907 36.298 36.2822 36.1885L29.4805 32.2617C29.3733 32.1997 29.2794 32.1172 29.2042 32.0189C29.1289 31.9206 29.0737 31.8085 29.0418 31.6889C29.0099 31.5693 29.0019 31.4445 29.0181 31.3218C29.0344 31.1991 29.0747 31.0808 29.1367 30.9736C29.1987 30.8665 29.2812 30.7726 29.3795 30.6973C29.4778 30.6221 29.59 30.5669 29.7096 30.535C29.8292 30.5031 29.9539 30.495 30.0766 30.5113C30.1993 30.5276 30.3177 30.5679 30.4248 30.6299L37.2266 34.5576C37.4257 34.6833 37.6482 34.7676 37.8807 34.8052C38.1132 34.8428 38.3509 34.8331 38.5796 34.7766C38.8083 34.7202 39.0232 34.6181 39.2114 34.4765C39.3996 34.335 39.5574 34.1569 39.6751 33.9529C39.7928 33.7489 39.8681 33.5232 39.8965 33.2894C39.9249 33.0556 39.9057 32.8184 39.8402 32.5922C39.7747 32.366 39.6642 32.1553 39.5153 31.9728C39.3664 31.7903 39.1821 31.6398 38.9736 31.5303L38.9766 31.5234ZM33.6338 6.35938H37.8672L33.1455 1.23242V5.87109C33.1455 6.00059 33.197 6.12479 33.2885 6.21636C33.3801 6.30793 33.5043 6.35938 33.6338 6.35938ZM17.4922 12.8047C17.5718 12.8842 17.6676 12.9456 17.7732 12.9847C17.8787 13.0238 17.9914 13.0396 18.1036 13.0311C18.2158 13.0225 18.3249 12.9898 18.4233 12.9353C18.5217 12.8807 18.6072 12.8055 18.6738 12.7148L19.8184 11.4033C19.9348 11.2456 19.9877 11.0499 19.9666 10.8551C19.9455 10.6602 19.8519 10.4804 19.7043 10.3513C19.5568 10.2222 19.3662 10.1533 19.1702 10.1582C18.9743 10.1632 18.7873 10.2416 18.6465 10.3779L18.0078 11.1104L17.9785 11.082C17.8308 10.9417 17.6341 10.8646 17.4304 10.8672C17.2267 10.8698 17.032 10.9519 16.888 11.096C16.7439 11.2401 16.6618 11.4347 16.6592 11.6384C16.6566 11.8421 16.7337 12.0388 16.874 12.1865L17.4922 12.8047ZM15.4336 19.043L13.1328 17.7158V1.89551C13.1333 1.72032 13.2031 1.55246 13.327 1.42859C13.4509 1.30471 13.6188 1.23489 13.7939 1.23438H31.583V5.87305C31.583 6.41695 31.7991 6.93857 32.1837 7.32317C32.5683 7.70776 33.0899 7.92383 33.6338 7.92383H37.8672V16.1084L35.5234 17.459C33.6341 17.4006 31.7435 17.5216 29.877 17.8203C28.1377 18.0977 26.3926 18.5439 24.9541 19.2061C24.7795 19.2876 24.5977 19.353 24.4111 19.4014C24.3135 19.4287 24.21 19.459 24.0947 19.499C23.7248 19.6165 23.378 19.7969 23.0693 20.0322C23.0377 20.0166 23.005 20.0029 22.9717 19.9912C21.6385 19.5269 20.2601 19.2042 18.8594 19.0283C17.7215 18.887 16.5702 18.8919 15.4336 19.043ZM24.0068 8.95312C24.0068 9.16033 24.0891 9.35904 24.2357 9.50555C24.3822 9.65206 24.5809 9.73438 24.7881 9.73438H29.6631C29.8703 9.73438 30.069 9.65206 30.2155 9.50555C30.362 9.35904 30.4443 9.16033 30.4443 8.95312C30.4443 8.74592 30.362 8.54721 30.2155 8.4007C30.069 8.25418 29.8703 8.17188 29.6631 8.17188H24.7881C24.5809 8.17188 24.3822 8.25418 24.2357 8.4007C24.0891 8.54721 24.0068 8.74592 24.0068 8.95312ZM24.0068 11.7256C24.0068 11.9328 24.0891 12.1315 24.2357 12.278C24.3822 12.4245 24.5809 12.5068 24.7881 12.5068H31.7217C31.9289 12.5068 32.1276 12.4245 32.2741 12.278C32.4206 12.1315 32.5029 11.9328 32.5029 11.7256C32.5029 11.5184 32.4206 11.3197 32.2741 11.1732C32.1276 11.0266 31.9289 10.9443 31.7217 10.9443H24.7881C24.5809 10.9443 24.3822 11.0266 24.2357 11.1732C24.0891 11.3197 24.0068 11.5184 24.0068 11.7256ZM24.0068 14.498C24.0068 14.7052 24.0891 14.904 24.2357 15.0505C24.3822 15.197 24.5809 15.2793 24.7881 15.2793H35.2861C35.4933 15.2793 35.692 15.197 35.8386 15.0505C35.9851 14.904 36.0674 14.7052 36.0674 14.498C36.0674 14.2908 35.9851 14.0921 35.8386 13.9456C35.692 13.7991 35.4933 13.7168 35.2861 13.7168H24.7881C24.5809 13.7168 24.3822 13.7991 24.2357 13.9456C24.0891 14.0921 24.0068 14.2908 24.0068 14.498ZM15.7139 13.7012C15.7139 13.8307 15.7653 13.9549 15.8569 14.0464C15.9485 14.138 16.0726 14.1895 16.2021 14.1895H20.4619C20.5914 14.1895 20.7156 14.138 20.8072 14.0464C20.8988 13.9549 20.9502 13.8307 20.9502 13.7012V9.44141C20.9502 9.31191 20.8988 9.18771 20.8072 9.09614C20.7156 9.00457 20.5914 8.95312 20.4619 8.95312H16.2021C16.0726 8.95312 15.9485 9.00457 15.8569 9.09614C15.7653 9.18771 15.7139 9.31191 15.7139 9.44141V13.7012ZM30.373 19.6582C29.2383 19.8398 24.5986 21.0068 23.8125 21.8252C23.611 22.0361 23.4659 22.2944 23.3906 22.5762C22.9863 24.085 22.5957 25.6035 22.1738 27.1074C22.0469 27.5596 21.959 27.873 22.0332 28.3506C22.1088 28.8302 22.2677 29.293 22.5029 29.7178C23.2021 28.7334 23.7998 27.7734 24.4082 26.7324C25.3223 25.1699 25.9707 24.0625 27.0811 23.7969C27.5928 23.6748 28.5166 23.3086 29.0225 23.6016C32.6357 25.6904 36.3408 27.7461 39.9209 29.8936C40.7175 30.3527 41.3091 31.0984 41.5752 31.9785L41.6318 31.9287C41.9185 31.6625 42.2197 31.4124 42.5342 31.1797L35.6689 19.2891C33.8963 19.2539 32.124 19.3764 30.373 19.6553V19.6582Z"
                                        fill="#96CE47" />
                                </svg>
                                <span class="count" data-target="70">0</span><span>+</span>
                            </div>
                            <p class="m-0">BRANDS PARTNERED</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="brand_content">
    <p class="mb_60"><span>Brands we've worked with</span></p>
    <div class="owl-carousel owl-theme" id="brands">
        <?php for ($i = 1; $i <= 23; $i++): ?>
            <div class="item">
                <img src="<?php echo $asset_path; ?>/assets/img/brand/<?php echo $i; ?>.png">
            </div>
        <?php endfor; ?>
    </div>
</section>
<section class="personality-brands l-_hpx">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="main_content">
                <div class="text">
                    <div class="content">
                        <h2>The ultimate common ground for <span>personalities and brands</h2></span>
                        <p>Find the perfect match for your brand or event. Explore our diverse roster of talent,
                            influencers, and event hosts, and connect directly to book your ideal partnership.</p>
                        <div class="cta">
                            <a href="<?php echo $redirect_url; ?>/" target="_blank" class="cta_green c_r c_btn">Book a
                                Celebrity</a>
                            <a href="<?php echo $redirect_url; ?>/" target="_blank" class="cta_violet c_r c_btn">Book an
                                INfluencer</a>
                            <a href="<?php echo $redirect_url; ?>/" target="_blank" class="cta_blue c_r c_btn">Book an
                                Event
                                Host/Appearance</a>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-theme" id="personalities">
                    <div class="item">
                        <img src="<?php echo $asset_path; ?>/assets/img/celebrity/Robin.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo $asset_path; ?>/assets/img/celebrity/Daniel.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo $asset_path; ?>/assets/img/celebrity/Jasmine.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo $asset_path; ?>/assets/img/celebrity/Anne.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo $asset_path; ?>/assets/img/celebrity/Piolo.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo $asset_path; ?>/assets/img/celebrity/Kathryn.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo $asset_path; ?>/assets/img/celebrity/Belle.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo $asset_path; ?>/assets/img/celebrity/Alden.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo $asset_path; ?>/assets/img/celebrity/Maris.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo $asset_path; ?>/assets/img/celebrity/Donny.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="index_services l-_hpx">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="header_content">
                <div class="text">
                    <h2>Join Our <span>Growing Family</span></h2>
                    <p class="m-0">We're more than just a talent agency; we're a passionate team dedicated to building
                        thriving
                        careers and fostering lasting partnerships.</p>
                </div>
            </div>
            <div class="owl-carousel owl-theme" id="services">
                <div class="item">
                    <div class="owl_card">
                        <img src="<?php echo $asset_path; ?>/assets/img/index/service-border_right.png"
                            alt="Border Left" class="service-border_right d-none d-xl-block">
                        <a href="<?php echo $redirect_url; ?>/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="57" height="57" viewBox="0 0 57 57"
                                fill="none">
                                <g clip-path="url(#clip0_2901_1001)">
                                    <path
                                        d="M41.0893 16.0919L24.653 14.6539C24.217 14.6234 23.7865 14.7653 23.4542 15.0491C23.1219 15.3329 22.9143 15.7359 22.8762 16.1712C22.8382 16.6066 22.9726 17.0394 23.2506 17.3766C23.5286 17.7138 23.9279 17.9284 24.3625 17.974L36.7907 19.0613L14.338 37.9015C13.9993 38.1856 13.7875 38.5926 13.7489 39.0329C13.7104 39.4733 13.8484 39.9109 14.1325 40.2495C14.4167 40.5881 14.8237 40.8 15.264 40.8385C15.7044 40.877 16.142 40.7391 16.4806 40.4549L38.9333 21.6148L37.846 34.0431C37.8229 34.2632 37.8438 34.4857 37.9076 34.6976C37.9714 34.9095 38.0768 35.1066 38.2176 35.2773C38.3583 35.4481 38.5317 35.5891 38.7276 35.6922C38.9234 35.7952 39.1378 35.8582 39.3583 35.8775C39.5788 35.8968 39.8009 35.872 40.0116 35.8045C40.2224 35.737 40.4176 35.6283 40.5859 35.4846C40.7542 35.3408 40.8922 35.165 40.9918 34.9674C41.0914 34.7698 41.1507 34.5543 41.1662 34.3336L42.6042 17.8972C42.6426 17.4569 42.5046 17.0194 42.2206 16.6809C41.9365 16.3423 41.5296 16.1305 41.0893 16.0919Z"
                                        fill="#F2F7E0" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_2901_1001">
                                        <rect width="40" height="40" fill="white"
                                            transform="translate(0 26) rotate(-40)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <div class="content">
                            <div class="text">
                                <h3>Artist Management </h3>
                                <p>We provide the guidance, resources, and strategic planning to help you navigate the
                                    industry and achieve your full potential.</p>
                            </div>
                            <img src="<?php echo $asset_path; ?>/assets/img/index/Desktop-Artist.png" alt=""
                                class="d-none d-md-block">
                            <img src="<?php echo $asset_path; ?>/assets/img/index/art.png" alt="" class="d-md-none">
                            <img src="<?php echo $asset_path; ?>/assets/img/index/art-1.png" alt="" class="d-md-none">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl_card">
                        <img src="<?php echo $asset_path; ?>/assets/img/index/service-border_right.png"
                            alt="Border Left" class="service-border_right d-none d-xl-block">
                        <a href="<?php echo $redirect_url; ?>/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="57" height="57" viewBox="0 0 57 57"
                                fill="none">
                                <g clip-path="url(#clip0_2901_1001)">
                                    <path
                                        d="M41.0893 16.0919L24.653 14.6539C24.217 14.6234 23.7865 14.7653 23.4542 15.0491C23.1219 15.3329 22.9143 15.7359 22.8762 16.1712C22.8382 16.6066 22.9726 17.0394 23.2506 17.3766C23.5286 17.7138 23.9279 17.9284 24.3625 17.974L36.7907 19.0613L14.338 37.9015C13.9993 38.1856 13.7875 38.5926 13.7489 39.0329C13.7104 39.4733 13.8484 39.9109 14.1325 40.2495C14.4167 40.5881 14.8237 40.8 15.264 40.8385C15.7044 40.877 16.142 40.7391 16.4806 40.4549L38.9333 21.6148L37.846 34.0431C37.8229 34.2632 37.8438 34.4857 37.9076 34.6976C37.9714 34.9095 38.0768 35.1066 38.2176 35.2773C38.3583 35.4481 38.5317 35.5891 38.7276 35.6922C38.9234 35.7952 39.1378 35.8582 39.3583 35.8775C39.5788 35.8968 39.8009 35.872 40.0116 35.8045C40.2224 35.737 40.4176 35.6283 40.5859 35.4846C40.7542 35.3408 40.8922 35.165 40.9918 34.9674C41.0914 34.7698 41.1507 34.5543 41.1662 34.3336L42.6042 17.8972C42.6426 17.4569 42.5046 17.0194 42.2206 16.6809C41.9365 16.3423 41.5296 16.1305 41.0893 16.0919Z"
                                        fill="#F2F7E0" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_2901_1001">
                                        <rect width="40" height="40" fill="white"
                                            transform="translate(0 26) rotate(-40)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <div class="content">
                            <div class="text">
                                <h3>endorsement Management</h3>
                                <p>Our experience has given us the expertise to secure impactful endorsements that drive
                                    results.</p>
                            </div>
                            <img src="<?php echo $asset_path; ?>/assets/img/index/Desktop-Endorsement.png" alt=""
                                class="d-none d-md-block">
                            <img src="<?php echo $asset_path; ?>/assets/img/index/endor.png" alt="" class="d-md-none">
                            <img src="<?php echo $asset_path; ?>/assets/img/index/endor-1.png" alt="" class="d-md-none">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl_card">
                        <img src="<?php echo $asset_path; ?>/assets/img/index/service-border_right.png"
                            alt="Border Left" class="service-border_right d-none d-xl-block">
                        <a href="<?php echo $redirect_url; ?>/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="57" height="57" viewBox="0 0 57 57"
                                fill="none">
                                <g clip-path="url(#clip0_2901_1001)">
                                    <path
                                        d="M41.0893 16.0919L24.653 14.6539C24.217 14.6234 23.7865 14.7653 23.4542 15.0491C23.1219 15.3329 22.9143 15.7359 22.8762 16.1712C22.8382 16.6066 22.9726 17.0394 23.2506 17.3766C23.5286 17.7138 23.9279 17.9284 24.3625 17.974L36.7907 19.0613L14.338 37.9015C13.9993 38.1856 13.7875 38.5926 13.7489 39.0329C13.7104 39.4733 13.8484 39.9109 14.1325 40.2495C14.4167 40.5881 14.8237 40.8 15.264 40.8385C15.7044 40.877 16.142 40.7391 16.4806 40.4549L38.9333 21.6148L37.846 34.0431C37.8229 34.2632 37.8438 34.4857 37.9076 34.6976C37.9714 34.9095 38.0768 35.1066 38.2176 35.2773C38.3583 35.4481 38.5317 35.5891 38.7276 35.6922C38.9234 35.7952 39.1378 35.8582 39.3583 35.8775C39.5788 35.8968 39.8009 35.872 40.0116 35.8045C40.2224 35.737 40.4176 35.6283 40.5859 35.4846C40.7542 35.3408 40.8922 35.165 40.9918 34.9674C41.0914 34.7698 41.1507 34.5543 41.1662 34.3336L42.6042 17.8972C42.6426 17.4569 42.5046 17.0194 42.2206 16.6809C41.9365 16.3423 41.5296 16.1305 41.0893 16.0919Z"
                                        fill="#F2F7E0" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_2901_1001">
                                        <rect width="40" height="40" fill="white"
                                            transform="translate(0 26) rotate(-40)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <div class="content">
                            <div class="text">
                                <h3>influencer marketing</h3>
                                <p>We help influencers reach their target audiences and elevate your brand awareness.
                                </p>
                            </div>
                            <img src="<?php echo $asset_path; ?>/assets/img/index/Influencer-Marketing.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl_card">
                        <img src="<?php echo $asset_path; ?>/assets/img/index/service-border_right.png"
                            alt="Border Left" class="service-border_right d-none d-xl-block">
                        <a href="<?php echo $redirect_url; ?>/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="57" height="57" viewBox="0 0 57 57"
                                fill="none">
                                <g clip-path="url(#clip0_2901_1001)">
                                    <path
                                        d="M41.0893 16.0919L24.653 14.6539C24.217 14.6234 23.7865 14.7653 23.4542 15.0491C23.1219 15.3329 22.9143 15.7359 22.8762 16.1712C22.8382 16.6066 22.9726 17.0394 23.2506 17.3766C23.5286 17.7138 23.9279 17.9284 24.3625 17.974L36.7907 19.0613L14.338 37.9015C13.9993 38.1856 13.7875 38.5926 13.7489 39.0329C13.7104 39.4733 13.8484 39.9109 14.1325 40.2495C14.4167 40.5881 14.8237 40.8 15.264 40.8385C15.7044 40.877 16.142 40.7391 16.4806 40.4549L38.9333 21.6148L37.846 34.0431C37.8229 34.2632 37.8438 34.4857 37.9076 34.6976C37.9714 34.9095 38.0768 35.1066 38.2176 35.2773C38.3583 35.4481 38.5317 35.5891 38.7276 35.6922C38.9234 35.7952 39.1378 35.8582 39.3583 35.8775C39.5788 35.8968 39.8009 35.872 40.0116 35.8045C40.2224 35.737 40.4176 35.6283 40.5859 35.4846C40.7542 35.3408 40.8922 35.165 40.9918 34.9674C41.0914 34.7698 41.1507 34.5543 41.1662 34.3336L42.6042 17.8972C42.6426 17.4569 42.5046 17.0194 42.2206 16.6809C41.9365 16.3423 41.5296 16.1305 41.0893 16.0919Z"
                                        fill="#F2F7E0" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_2901_1001">
                                        <rect width="40" height="40" fill="white"
                                            transform="translate(0 26) rotate(-40)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <div class="content">
                            <div class="text">
                                <h3>events and Appearance</h3>
                                <p>With our roster of talents, we can take your events to the next level by providing
                                    you with the ideal host - one with the right personality and wit!</p>
                            </div>
                            <img src="<?php echo $asset_path; ?>/assets/img/index/Events-Appearance.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="index_column l-_hpx">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <div class="main_content">
                        <h2><span>Boost your</span> digital presence with us</h2>
                        <h5>This is VCM.</h5>
                        <p>VCM is a marketing agency for brand work, celebrity management, and in digital marketing
                            in the Philippines.</p>
                        <p>We connect and champion both brand and talent; taking pride in our work with some of the
                            most recognizable brands in the country, while also managing household names in the
                            business such as Robin Padilla, Rommel Padilla, Mariel Padilla, Mikael Daez, Megan
                            Young, Joyce Pring. </p>
                        <p class="m-0">Our founder, Elizabeth Alviar-Vidanes, has 30 years of experience working with
                            the
                            veterans in the show business and advertising industry, and as we carry this legacy, we
                            aim to keep building breakthroughs in the industry.</p>
                        <a href="<?php echo $redirect_url; ?>/about-us" class="c_btn cta_green c_r"
                            target="_blank">Learn
                            More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main_image">
                        <img src="<?php echo $asset_path; ?>/assets/img/index/about_us.png"
                            alt="Boost your digital presence with us" class="">
                        <img src="<?php echo $asset_path; ?>/assets/img/general/border-left.png" alt="Border Up"
                            class="bd border-left d-none">
                        <div class="content">
                            <h5 class="m-0">30+</h5>
                            <p class="m-0">Years of Experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about_content l-_hpx">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="header_content">
                <h2 class="m-0">VCM is the <span>management agency YOU need</span></h2>
                <a href="<?php echo $redirect_url; ?>/about-us" class="desk_top c_btn cta_green c_r"
                    target="_blank">join our
                    powerhouse</a>
            </div>
            <div class="d-flex">
                <div class="_image">
                    <img src="<?php echo $asset_path; ?>/assets/img/index/mariel.png" alt="Partner with Our Talents">
                </div>
                <div class="_content">
                    <div class="text">
                        <h3>Partner with Our Talents</h3>
                        <p class="m-0">Elevate your next event with an unforgettable celebrity appearance. Browse our
                            list of celebrities, and let VCM connect you with the perfect star to make your occasion
                            extraordinary.</p>
                    </div>
                </div>
            </div>
            <a href="<?php echo $redirect_url; ?>/about-us" class="mobile c_btn cta_green c_r" target="_blank">join our
                powerhouse</a>
        </div>
    </div>
</section>
<section class="stories_content l-_hpx">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="header_content">
                <h2><span>We Don't Just Manage;</span> We Make it Happen</h2>
                <p>VCM is more than an agency; we're a family built on honesty and communication. Driven by excellence,
                    we deliver extraordinary results for our talent. We combine strategic thinking with a proactive
                    approach, ensuring every step, from personal branding to securing opportunities, is meticulously
                    planned and executed. We listen, care, and are dedicated to your long-term goals.</p>
            </div>
            <div class="row">
                <div class="col-xxl-3 col-lg-6 col-md-6 col-12">
                    <div class="stories_card">
                        <div class="header_text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="51" viewBox="0 0 50 51"
                                fill="none">
                                <path
                                    d="M25.5645 10.3043L24.8639 9.74522C13.4667 0.838332 -1.92597 14.8793 6.75986 26.8803L7.4292 16.4228L8.94907 16.4701C9.96889 16.5237 10.9295 16.9656 11.6338 17.7051C12.3382 18.4446 12.7328 19.4256 12.7368 20.4468V23.195L21.8556 14.0841C22.1719 13.7539 22.566 13.5084 23.0017 13.3699C23.4375 13.2314 23.901 13.2044 24.3499 13.2913C24.7988 13.3783 25.2187 13.5764 25.5712 13.8676C25.9237 14.1588 26.1976 14.5337 26.3677 14.9581L26.4229 14.903C26.9268 14.4043 27.6038 14.1194 28.3127 14.1077C28.8535 14.1128 29.3806 14.279 29.8266 14.585C30.2725 14.891 30.6173 15.323 30.8167 15.8258C31.0161 16.3285 31.0612 16.8793 30.9462 17.4078C30.8312 17.9363 30.5614 18.4186 30.1711 18.7931C30.5902 18.9515 30.9634 19.2115 31.2573 19.5496C31.5511 19.8878 31.7564 20.2937 31.8548 20.7308C31.9532 21.1679 31.9415 21.6226 31.8208 22.054C31.7001 22.4855 31.4742 22.8803 31.1634 23.2029C31.1311 23.2364 31.0969 23.2679 31.061 23.2974C31.4059 23.4289 31.7213 23.6274 31.9889 23.8815C32.2565 24.1356 32.4711 24.4403 32.6203 24.7779C32.8278 25.2615 32.8869 25.7959 32.7902 26.3133C32.6935 26.8306 32.4452 27.3076 32.0769 27.6836C31.5671 28.1582 21.1851 38.6936 20.9657 38.6451C22.4481 39.4971 23.9843 40.2521 25.5645 40.9051C25.6748 40.9051 46.8733 31.3059 46.8733 19.5963C47.0435 8.63962 33.5063 2.94996 25.5645 10.3043Z"
                                    fill="#F2F7E0" />
                                <path
                                    d="M6.01906 33.3173C5.87138 33.1697 5.67113 33.0869 5.46236 33.0869C5.25359 33.087 5.05338 33.1699 4.90578 33.3176L3.35563 34.8676C3.208 35.0153 3.12504 35.2155 3.125 35.4243C3.12496 35.6331 3.20783 35.8334 3.3554 35.9811L11.2036 43.8361C11.2767 43.9093 11.3635 43.9674 11.459 44.007C11.5546 44.0466 11.657 44.067 11.7605 44.067C11.8639 44.067 11.9663 44.0467 12.0619 44.0071C12.1575 43.9675 12.2443 43.9095 12.3175 43.8364L13.8745 42.2793C13.9478 42.2068 14.0061 42.1204 14.046 42.0253C14.0859 41.9301 14.1066 41.828 14.1069 41.7248C14.1072 41.6217 14.0871 41.5194 14.0478 41.424C14.0084 41.3287 13.9507 41.242 13.8777 41.169C12.2735 39.5663 7.63535 34.9322 6.01906 33.3173Z"
                                    fill="#F2F7E0" />
                                <path
                                    d="M30.9275 26.6054C31.032 26.4982 31.1139 26.3711 31.1685 26.2317C31.2231 26.0923 31.2492 25.9434 31.2453 25.7938C31.2414 25.6441 31.2075 25.4968 31.1457 25.3604C31.0838 25.2241 30.9953 25.1015 30.8853 25C30.7754 24.8984 30.6462 24.8199 30.5053 24.7691C30.3645 24.7183 30.215 24.6963 30.0655 24.7042C29.916 24.7122 29.7696 24.7501 29.635 24.8155C29.5004 24.881 29.3802 24.9728 29.2817 25.0855L23.9112 30.456C23.8381 30.5296 23.7509 30.5878 23.6549 30.6271C23.5588 30.6663 23.4558 30.6858 23.3521 30.6844C23.1979 30.6825 23.0476 30.6354 22.9198 30.5491C22.792 30.4628 22.6922 30.341 22.6328 30.1987C22.5734 30.0564 22.5569 29.8998 22.5853 29.7482C22.6138 29.5967 22.686 29.4567 22.793 29.3457C24.1159 28.0228 28.7935 23.3374 30.0297 22.1089C30.2359 21.898 30.3508 21.6144 30.3495 21.3195C30.3482 21.0246 30.2308 20.742 30.0228 20.533C29.8148 20.3239 29.5328 20.2052 29.2379 20.2024C28.943 20.1996 28.6588 20.3131 28.4469 20.5182L21.2102 27.755C21.0618 27.8979 20.8634 27.977 20.6575 27.9754C20.4515 27.9738 20.2544 27.8917 20.1082 27.7466C19.9621 27.6014 19.8786 27.4049 19.8755 27.1989C19.8725 26.993 19.9502 26.7941 20.092 26.6447C21.3834 25.3532 27.9981 18.7385 29.1321 17.6046C29.3365 17.3923 29.4495 17.1083 29.4468 16.8136C29.444 16.5189 29.3258 16.2371 29.1174 16.0287C28.909 15.8203 28.6271 15.702 28.3324 15.6992C28.0377 15.6965 27.7537 15.8095 27.5414 16.014C26.3681 17.1951 19.8321 23.7311 18.5092 25.054C18.361 25.1975 18.1624 25.2772 17.9561 25.2759C17.7498 25.2746 17.5522 25.1924 17.4058 25.047C17.2594 24.9017 17.1758 24.7047 17.1731 24.4984C17.1703 24.2921 17.2486 24.0929 17.391 23.9437L24.6436 16.6912C24.7486 16.5822 24.8305 16.4531 24.8844 16.3117C24.9384 16.1704 24.9632 16.0195 24.9575 15.8683C24.9518 15.7171 24.9156 15.5686 24.8511 15.4317C24.7867 15.2947 24.6952 15.1723 24.5823 15.0715C24.4694 14.9708 24.3373 14.8939 24.1939 14.8454C24.0506 14.7969 23.8989 14.7779 23.748 14.7894C23.5971 14.8009 23.4501 14.8428 23.3158 14.9125C23.1814 14.9821 23.0625 15.0782 22.9662 15.1949L12.5087 25.6525C12.3984 25.7614 12.2585 25.8354 12.1064 25.8654C11.9544 25.8955 11.7969 25.8802 11.6534 25.8215C11.51 25.7628 11.387 25.6632 11.2996 25.5352C11.2123 25.4071 11.1645 25.2562 11.1622 25.1013V20.4316C11.1562 19.8221 10.9199 19.2373 10.5007 18.7948C10.0815 18.3522 9.51046 18.0846 8.90215 18.0456L8.20129 29.0465C8.20238 29.7248 8.31682 30.3981 8.53989 31.0387C8.98874 32.3065 8.96676 32.3679 8.10059 33.1632L14.0223 39.0849C14.731 38.4628 14.7373 37.9369 15.8712 38.3543C17.5485 38.874 19.2809 38.2597 21.0291 36.5116L30.9275 26.6054Z"
                                    fill="#F2F7E0" />
                            </svg>
                            <h3>VCM is honest & <br>authentic</h3>
                        </div>
                        <p class="m-0">We build real connections based on trust and respect as we put prime value on
                            maintaining open communication with our Partners. We build both a team and a family. We
                            listen. We care.</p>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6 col-md-6 col-12">
                    <div class="stories_card">
                        <div class="header_text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="51" viewBox="0 0 50 51"
                                fill="none">
                                <path
                                    d="M31.4814 36.9281C31.4814 42.0337 35.6351 46.1873 40.7406 46.1873C45.8462 46.1873 49.9998 42.0337 49.9998 36.9281C49.9998 31.8226 45.8462 27.6689 40.7406 27.6689C35.6351 27.6689 31.4814 31.8225 31.4814 36.9281ZM46.6295 34.3913L39.248 41.7727L34.5842 37.1089L36.6558 35.0373L39.248 37.6295L44.5579 32.3197L46.6295 34.3913Z"
                                    fill="#F2F7E0" />
                                <path
                                    d="M28.5518 36.9283C28.5518 30.2073 34.0197 24.7394 40.7407 24.7394C43.25 24.7394 45.5844 25.5018 47.525 26.8068C49.2359 23.8082 49.9979 20.9989 49.9979 18.3467C49.9979 10.468 43.6111 4.08115 35.7323 4.08115C31.4514 4.08115 27.6137 5.96936 24.9989 8.95543C22.3841 5.96926 18.5465 4.08105 14.2656 4.08105C6.38689 4.08105 0 10.4679 0 18.3466C0 26.2095 6.6826 35.4507 24.999 46.9189C26.9271 45.7116 28.7229 44.5298 30.3984 43.3711C29.229 41.5005 28.5518 39.2922 28.5518 36.9283Z"
                                    fill="#F2F7E0" />
                            </svg>
                            <h3>VCM is <br>passionate</h3>
                        </div>
                        <p class="m-0">We don't want normal. It is our culture to deliver extraordinary results. We
                            go beyond the call of duty. We are fueled by the same passion that keeps the industry
                            alive.
                        </p>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6 col-md-6 col-12">
                    <div class="stories_card">
                        <div class="header_text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="61" viewBox="0 0 60 61"
                                fill="none">
                                <path
                                    d="M24.3819 20.7734H22.8364C22.2819 20.7734 21.8364 21.2189 21.8364 21.7734V29.128C21.8364 29.6825 22.2819 30.128 22.8364 30.128H37.1455C37.7001 30.128 38.1455 29.6825 38.1455 29.128V21.7734C38.1455 21.2189 37.7001 20.7734 37.1455 20.7734H35.6001C35.0455 20.7734 34.6001 21.2189 34.6001 21.7734V23.9553C34.6001 24.2553 34.3546 24.5007 34.0546 24.5007H32.3819C32.0819 24.5007 31.8364 24.2553 31.8364 23.9553V21.7734C31.8364 21.2189 31.391 20.7734 30.8364 20.7734H29.1637C28.6092 20.7734 28.1637 21.2189 28.1637 21.7734V23.9553C28.1637 24.2553 27.9182 24.5007 27.6182 24.5007H25.9455C25.6455 24.5007 25.4001 24.2553 25.4001 23.9553V21.7734C25.391 21.228 24.9364 20.7734 24.3819 20.7734Z"
                                    fill="#F2F7E0" />
                                <path
                                    d="M40.9817 51.0908H19.0181C18.3363 51.0908 17.7817 51.6454 17.7817 52.3272V59.5363H42.2181V52.3272C42.2181 51.6454 41.6636 51.0908 40.9817 51.0908ZM38.0726 56.209H21.9272C21.4363 56.209 21.0363 55.809 21.0363 55.3181C21.0363 54.8272 21.4363 54.4272 21.9272 54.4272H38.0636C38.5545 54.4272 38.9545 54.8272 38.9545 55.3181C38.9636 55.809 38.5636 56.209 38.0726 56.209Z"
                                    fill="#F2F7E0" />
                                <path
                                    d="M52.4728 21.5002H49.1183C48.6092 19.0275 47.6364 16.7366 46.3001 14.7002L48.6819 12.3184C49.2546 11.7366 49.2546 10.7911 48.6819 10.2093L45.2273 6.76387C44.6546 6.18205 43.7001 6.18205 43.1183 6.76387L40.7364 9.1366C38.7001 7.79114 36.4092 6.81841 33.9364 6.30932V2.95478C33.9364 2.1275 33.2728 1.46387 32.4364 1.46387H27.5637C26.7364 1.46387 26.0637 2.1275 26.0637 2.95478V6.31841C23.591 6.8275 21.3001 7.80023 19.2728 9.14569L16.891 6.76387C16.3092 6.18205 15.3637 6.18205 14.7819 6.76387L11.3273 10.2093C10.7546 10.7911 10.7455 11.7366 11.3273 12.3184L13.7092 14.7093C12.3728 16.7366 11.4001 19.0366 10.891 21.5002H7.51825C6.69098 21.5002 6.02734 22.1639 6.02734 22.9911V27.873C6.02734 28.7002 6.69098 29.3639 7.51825 29.3639H10.891C11.4001 31.8366 12.3637 34.1275 13.7092 36.1639L11.3364 38.5457C10.7546 39.1275 10.7546 40.073 11.3364 40.6548L14.7819 44.1002C15.3637 44.682 16.3092 44.682 16.891 44.1002L19.2728 41.7184C20.291 42.3911 21.3637 42.9639 22.5001 43.4457C23.4728 41.6184 23.9819 39.5275 24.2183 37.5457C19.691 35.382 16.5546 30.7821 16.5546 25.4184C16.5546 18.0002 22.5728 11.982 30.0001 11.982C37.4273 11.982 43.4455 18.0002 43.4455 25.4184C43.4455 30.773 40.3092 35.382 35.7819 37.5457C36.0183 39.5184 36.5183 41.6184 37.5001 43.4457C38.6364 42.973 39.7273 42.3911 40.7455 41.7184L43.1183 44.1002C43.7001 44.682 44.6546 44.682 45.2273 44.1002L48.6819 40.6548C49.2546 40.073 49.2546 39.1275 48.6819 38.5457L46.3001 36.1639C47.6455 34.1275 48.6092 31.8366 49.1183 29.3639H52.4728C53.3001 29.3639 53.9728 28.7002 53.9728 27.873V22.9911C53.9728 22.173 53.3001 21.5002 52.4728 21.5002Z"
                                    fill="#F2F7E0" />
                                <path
                                    d="M36.8093 45.7277C33.6547 41.355 33.6547 35.0005 33.882 31.9277H26.1275C26.3547 34.9914 26.3547 41.355 23.2002 45.7277H36.8093Z"
                                    fill="#F2F7E0" />
                                <path
                                    d="M20.0366 48.6825V49.3007H39.9548V48.6825C39.9548 48.037 39.4275 47.5098 38.7821 47.5098H21.2093C20.5639 47.5189 20.0366 48.037 20.0366 48.6825Z"
                                    fill="#F2F7E0" />
                            </svg>
                            <h3>VCM is <br>strategic</h3>
                        </div>
                        <p class="m-0">We do our research seriously to optimize the personal branding of our
                            talents. We prioritize "what's next" for you.</p>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6 col-md-6 col-12">
                    <div class="stories_card">
                        <div class="header_text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="61" viewBox="0 0 60 61"
                                fill="none">
                                <g clip-path="url(#clip0_1717_7402)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M26.4406 6.632C26.1598 6.3512 26.1598 5.8952 26.4406 5.6144C26.7214 5.3336 27.1774 5.3336 27.4582 5.6144L29.9974 8.1536C30.2782 8.4344 30.2782 8.8904 29.9974 9.1712C29.7166 9.452 29.2606 9.452 28.9798 9.1712L26.4406 6.632ZM25.0594 30.518C23.8762 29.3348 22.2406 28.6016 20.4334 28.6016C18.6274 28.6016 16.9918 29.3336 15.8074 30.518C14.6242 31.7012 13.891 33.3368 13.891 35.144C13.891 36.95 14.623 38.5856 15.8074 39.77C16.9906 40.9532 18.6262 41.6864 20.4334 41.6864C22.2394 41.6864 23.875 40.9544 25.0594 39.77C26.2426 38.5868 26.9758 36.9512 26.9758 35.144C26.9758 33.3368 26.2438 31.7012 25.0594 30.518ZM37.9702 38.5316C38.6242 37.6784 39.427 37.4768 40.1218 37.6676C40.4086 37.7468 40.6846 37.892 40.933 38.0864C41.1838 38.2832 41.3998 38.5268 41.5618 38.8004C41.9746 39.4952 42.0358 40.3952 41.4274 41.1884L37.7614 45.9656L37.5742 46.2116C36.751 47.2928 36.1438 48.0896 34.5754 48.0896H32.3962C31.2418 48.0896 30.1942 48.56 29.4358 49.3184C28.6774 50.0768 28.207 51.1244 28.207 52.2788V60.5H12.847L12.8566 51.6008C12.8794 51.2672 12.6742 50.948 12.343 50.84C11.9506 50.7128 11.5294 50.9276 11.4022 51.3188L8.41059 60.4508H3.73779L7.52739 49.88C9.77019 43.6232 16.1794 43.6664 17.521 43.676H17.5222C17.773 43.6784 17.3518 43.6796 17.6542 43.6796H33.6514V43.6784C33.8758 43.6784 34.0978 43.5776 34.2442 43.3856L37.9702 38.5316ZM39.8926 22.1324H37.9174V27.3068H39.8926V22.1324ZM37.9174 20.6924V19.2476C37.9174 18.4532 37.5934 17.732 37.0702 17.21C36.5482 16.688 35.8258 16.3628 35.0326 16.3628C34.2382 16.3628 33.517 16.6868 32.995 17.21C32.473 17.732 32.1478 18.4544 32.1478 19.2476C32.1478 20.042 32.4718 20.7632 32.995 21.2852C33.517 21.8072 34.2394 22.1324 35.0326 22.1324H36.4774V27.3068H34.021C33.8782 27.1016 33.7678 26.9456 33.6586 26.7896C31.9522 24.3656 30.091 21.7232 30.091 18.8132C30.091 16.4756 31.039 14.3588 32.5702 12.8264C34.1026 11.294 36.2194 10.3472 38.557 10.3472C40.8946 10.3472 43.0114 11.2952 44.5438 12.8264C46.0762 14.3588 47.023 16.4756 47.023 18.8132C47.023 21.704 45.1966 24.2852 43.501 26.6816C43.3438 26.9036 43.1878 27.1244 43.0594 27.3068H41.3314V22.1324H42.5554C43.3498 22.1324 44.071 21.8084 44.593 21.2852C45.115 20.762 45.4402 20.0408 45.4402 19.2476C45.4402 18.4532 45.1162 17.732 44.593 17.21C44.071 16.688 43.3486 16.3628 42.5554 16.3628C41.761 16.3628 41.0398 16.6868 40.5178 17.21C39.9958 17.732 39.6706 18.4544 39.6706 19.2476V20.6924H37.9174ZM35.0326 17.8028C34.6366 17.8028 34.2754 17.966 34.0126 18.2276C33.751 18.4892 33.5878 18.8504 33.5878 19.2476C33.5878 19.6436 33.751 20.0048 34.0126 20.2676C34.2742 20.5292 34.6354 20.6924 35.0326 20.6924H36.4774V19.2476C36.4774 18.8516 36.3142 18.4904 36.0526 18.2276C35.7898 17.966 35.4286 17.8028 35.0326 17.8028ZM42.5566 17.8028C42.1606 17.8028 41.7994 17.966 41.5366 18.2276C41.275 18.4892 41.1118 18.8504 41.1118 19.2476V20.6924H42.5566C42.9526 20.6924 43.3138 20.5292 43.5766 20.2676C43.8382 20.006 44.0014 19.6448 44.0014 19.2476C44.0014 18.8516 43.8382 18.4904 43.5766 18.2276C43.3138 17.966 42.9526 17.8028 42.5566 17.8028ZM43.903 28.7468H33.211C32.911 28.7468 32.6914 29.1356 32.5714 29.6348C32.5102 29.8868 32.4802 30.17 32.4802 30.4616C32.4802 30.7532 32.5102 31.0364 32.5714 31.2884C32.6914 31.7864 32.9122 32.1764 33.211 32.1764H34.0462H43.069H43.0738H43.9042C44.203 32.1764 44.4238 31.7876 44.5438 31.2884C44.605 31.0364 44.635 30.7532 44.635 30.4616C44.635 30.17 44.605 29.8868 44.5438 29.6348C44.4226 29.1356 44.203 28.7468 43.903 28.7468ZM42.037 33.6164H35.077L35.7502 35.4452C35.9242 35.9168 36.133 36.2708 36.3646 36.4964C36.5362 36.6632 36.7174 36.7508 36.9022 36.7508H40.2106C40.3954 36.7508 40.5778 36.6632 40.7482 36.4964C40.9798 36.2708 41.1886 35.9168 41.3626 35.4452L42.037 33.6164ZM38.077 1.2176C38.077 0.8216 38.3986 0.5 38.7946 0.5C39.1906 0.5 39.5122 0.8216 39.5122 1.2176V4.8092C39.5122 5.2052 39.1906 5.5268 38.7946 5.5268C38.3986 5.5268 38.077 5.2052 38.077 4.8092V1.2176ZM55.5442 17.2508C55.9402 17.2508 56.2618 17.5724 56.2618 17.9684C56.2618 18.3644 55.9402 18.686 55.5442 18.686H51.9526C51.5566 18.686 51.235 18.3644 51.235 17.9684C51.235 17.5724 51.5566 17.2508 51.9526 17.2508H55.5442ZM50.1298 5.6144C50.4106 5.3336 50.8666 5.3336 51.1474 5.6144C51.4282 5.8952 51.4282 6.3512 51.1474 6.632L48.6082 9.1712C48.3274 9.452 47.8714 9.452 47.5906 9.1712C47.3098 8.8904 47.3098 8.4344 47.5906 8.1536L50.1298 5.6144ZM22.0438 18.6872C21.6466 18.6872 21.3238 18.3644 21.3238 17.9672C21.3238 17.57 21.6466 17.2472 22.0438 17.2472H25.6354C26.0326 17.2472 26.3554 17.57 26.3554 17.9672C26.3554 18.3644 26.0326 18.6872 25.6354 18.6872H22.0438Z"
                                        fill="#F2F7E0" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1717_7402">
                                        <rect width="60" height="60" fill="white" transform="translate(0 0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <h3>VCM is proactive and reactive</h3>
                        </div>
                        <p class="m-0">We operate from a hands-on and an action-based approach. We respond
                            immediately. We deliver.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="index_testimonials l-_hpx">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="owl-carousel owl-theme" id="testimonial">
                        <div class="item">
                            <div class="testi_card">
                                <img src="<?php echo $asset_path; ?>/assets/img/index/testi_border.png" alt=""
                                    class="border-left d-none">
                                <img src="<?php echo $asset_path; ?>/assets/img/index/iris.jpeg" alt=""
                                    class="testi_image">
                                <div class="text">
                                    <h3>IRIS AL-JAZIRA I. DEL FIERRO</h3>
                                    <p class="name">MullenLowe MARC, Media Relations Head</p>
                                </div>
                                <p class="desc">I have been working with VCM since 2022 and it has been an absolute
                                    pleasure. From the very beginning, they have been taking the time to truly
                                    understand our requests which resulted in them consistently presenting us with
                                    recommendations who were the perfect fit for the campaigns.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi_card">
                                <img src="<?php echo $asset_path; ?>/assets/img/index/testi_border.png" alt=""
                                    class="border-left d-none">
                                <img src="<?php echo $asset_path; ?>/assets/img/index/vani.jpg" alt=""
                                    class="testi_image">
                                <div class="text">
                                    <h3>Vani Altomonte</h3>
                                    <p class="name">iFace Inc., Marketing Director</p>
                                </div>
                                <p class="desc">The one year that we worked with VCM was very memorable for me. They
                                    were very hands-on with every engagement that we had with them. They went above
                                    and beyond just taking care of their talent because as clients, we also felt
                                    being prioritized by them.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi_card">
                                <img src="<?php echo $asset_path; ?>/assets/img/index/testi_border.png" alt=""
                                    class="border-left d-none">
                                <img src="<?php echo $asset_path; ?>/assets/img/index/alyssa.jpeg" alt=""
                                    class="testi_image">
                                <div class="text">
                                    <h3>Alyssa Dizon</h3>
                                    <p class="name">Galderma Philippines, Brand Manager</p>
                                </div>
                                <p class="desc">VCM is one of the best partners in the influencer industry that I've
                                    seen and work with so far. VCM team has the combination of competency and masterful
                                    influencer strategy. Their account managers have the ability to quickly establish
                                    trusting relationships with their clients.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi_card">
                                <img src="<?php echo $asset_path; ?>/assets/img/index/testi_border.png" alt=""
                                    class="border-left d-none">
                                <img src="<?php echo $asset_path; ?>/assets/img/index/inachan.jpg" alt=""
                                    class="testi_image">
                                <div class="text">
                                    <h3>Ina Chan</h3>
                                    <p class="name">Account Director, Ogilvy</p>
                                </div>
                                <p class="desc">VCM has been my partner since 2016 and ever since then, they are my
                                    preferred talent agency. I love working with the team because they are efficient,
                                    accommodating, flexible and easy to work with. Whenever I have project requirements,
                                    they are my go to agency since they have a wide network of KOLs and celebrities. My
                                    relationship with the team goes beyond transaction and consider them as friends.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="testimonial_content">
                        <h2>Hear From<span> Our talents</span></h2>
                        <p>See what our satisfied partners and talents have to say about their experience with VCM.
                            Their success stories are a testament to our dedication to building powerful connections
                            and achieving exceptional results.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-us l-_hpx">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-form">
                        <div class="header_content">
                            <h2>Ready to <span>join us?</span></h2>
                            <p>Drop us a mesage or give us a call. We'd love to chat about how VCM can make your
                                dream a
                                reality.</p>
                        </div>
                        <?php echo do_shortcode('[contact-form-7 id="b9d3928" title="Contact Form @Main"]') ?>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="contact-details">
                        <img src="<?php echo $asset_path; ?>/assets/img/index/megan.png" alt="Megan Young">
                        <h3>Let's Talk</h3>
                        <div class="info">
                            <div class="info_card">
                                <div class="image">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <g clip-path="url(#clip0_1408_16288)">
                                            <path
                                                d="M15.3914 11.3093L13.2981 9.21597C12.5505 8.46837 11.2796 8.76744 10.9805 9.7393C10.7563 10.4122 10.0087 10.786 9.33582 10.6364C7.84061 10.2626 5.82207 8.31885 5.44827 6.74888C5.22399 6.076 5.67255 5.3284 6.3454 5.10415C7.31728 4.8051 7.61633 3.53417 6.86872 2.78657L4.77543 0.693274C4.17734 0.16995 3.28021 0.16995 2.75689 0.693274L1.33644 2.11372C-0.0840089 3.60893 1.48596 7.57124 4.99971 11.085C8.51345 14.5987 12.4758 16.2435 13.971 14.7483L15.3914 13.3278C15.9148 12.7297 15.9148 11.8326 15.3914 11.3093Z"
                                                fill="#2E3094" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1408_16288">
                                                <rect width="15" height="15" fill="white"
                                                    transform="translate(0.799805 0.300781)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="d-flex">
                                    <h5 class="m-0">Phone Number</h5>
                                    <a href="tel:+639158835111" target="_blank">+63 9158835111</a>

                                </div>
                            </div>
                            <div class="info_card">
                                <div class="image">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <g clip-path="url(#clip0_1408_16298)">
                                            <path
                                                d="M10.5194 8.42383L9.26315 9.68436C8.75371 10.1956 7.85734 10.2066 7.33688 9.68436L6.08055 8.42383L1.56836 12.9507C1.73632 13.0283 1.9215 13.0747 2.11838 13.0747H14.4817C14.6785 13.0747 14.8637 13.0284 15.0316 12.9507L10.5194 8.42383Z"
                                                fill="#2E3094" />
                                            <path
                                                d="M14.4816 2.52734H2.11832C1.92145 2.52734 1.73626 2.57369 1.56836 2.65136L6.38995 7.48895C6.39027 7.48927 6.39065 7.48933 6.39098 7.48965C6.3913 7.48997 6.39136 7.49041 6.39136 7.49041L7.95912 9.06336C8.12564 9.22988 8.47434 9.22988 8.64086 9.06336L10.2083 7.49067C10.2083 7.49067 10.2087 7.48997 10.209 7.48965C10.209 7.48965 10.2097 7.48927 10.21 7.48895L15.0315 2.65133C14.8636 2.57363 14.6785 2.52734 14.4816 2.52734Z"
                                                fill="#2E3094" />
                                            <path
                                                d="M0.94002 3.26562C0.853125 3.44135 0.799805 3.63641 0.799805 3.84535V11.7555C0.799805 11.9645 0.853066 12.1595 0.93999 12.3352L5.46 7.80058L0.94002 3.26562Z"
                                                fill="#2E3094" />
                                            <path
                                                d="M15.6596 3.26562L11.1396 7.80064L15.6596 12.3354C15.7465 12.1596 15.7998 11.9646 15.7998 11.7556V3.84541C15.7998 3.63641 15.7465 3.44135 15.6596 3.26562Z"
                                                fill="#2E3094" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1408_16298">
                                                <rect width="15" height="15" fill="white"
                                                    transform="translate(0.799805 0.300781)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="d-flex">
                                    <h5 class="m-0">Email</h5>
                                    <a href="mailto:kali@vcmthecelebritysource.com" target="_blank">
                                        kali@vcmthecelebrity<br>source.com</a>
                                </div>
                            </div>
                            <div class="info_card">
                                <div class="image">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <g clip-path="url(#clip0_1408_16317)">
                                            <path
                                                d="M8.30255 0.300781C5.30709 0.300781 2.87012 2.73775 2.87012 5.73318C2.87012 9.45061 7.73161 14.908 7.93859 15.1385C8.13301 15.355 8.47244 15.3547 8.6665 15.1385C8.87349 14.908 13.735 9.45061 13.735 5.73318C13.7349 2.73775 11.298 0.300781 8.30255 0.300781ZM8.30255 8.46638C6.79546 8.46638 5.56938 7.24027 5.56938 5.73318C5.56938 4.22609 6.79549 3.00002 8.30255 3.00002C9.80961 3.00002 11.0357 4.22612 11.0357 5.73321C11.0357 7.2403 9.80961 8.46638 8.30255 8.46638Z"
                                                fill="#2E3094" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1408_16317">
                                                <rect width="15" height="15" fill="white"
                                                    transform="translate(0.802734 0.300781)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="d-flex">
                                    <h5 class="m-0">Address</h5>
                                    <a href="https://maps.app.goo.gl/wXt3gB9FMrBsgMvV6" target="_blank">Unit 14, La
                                        Chesa Townhomes, Alcantara St., Tandang Sora, Q.C.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="index_blog l-_hpx">
    <div class="container-fluid">
        <div class="wrapper">

            <div class="row">
                <div class="col-xl-12 col-lg-6 col-md-6 col-12">
                    <div class="header_content">
                        <div class="main_content">
                            <h2><span>the vcm spotlight:</span> Stories and insights</h2>
                            <p class="m-0">Dive into the world of talent management and influencer marketing with VCM.
                                We spill
                                the secrets and share the stories that bring your brand to life.</p>
                        </div>
                        <div class="_cta">
                            <a href="<?php echo $redirect_url; ?>/blogs" target="_blank"
                                class="cta_green c_r c_btn">View all
                                blogs</a>
                        </div>
                    </div>
                </div>
                <?php
                // Query posts
                $args = array(
                    'post_type' => 'post',  // Assuming your post type is 'post'
                    'posts_per_page' => 3,  // Number of posts to display
                    'order' => 'DESC',      // Order of posts (you can change to ASC if needed)
                );
                $query = new WP_Query($args);

                // Loop through posts
                if ($query->have_posts()):
                    while ($query->have_posts()):
                        $query->the_post();
                        // Get post data
                        $post_id = get_the_ID();
                        $post_title = get_the_title();
                        $post_date = get_the_date('F j, Y', $post_id);
                        $post_content = get_the_excerpt();
                        $post_permalink = get_permalink();

                        // Output each post card
                        ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="blog_card">
                                <div class="image">
                                    <?php
                                    // Display featured image if available
                                    if (has_post_thumbnail($post_id)) {
                                        echo get_the_post_thumbnail($post_id, 'full', array('class' => 'w-100', 'alt' => ''));
                                    } else {
                                        // Placeholder image or default image
                                        echo '<img src="' . $asset_path . '/assets/images/index/default-blog-image.jpg" class="w-100" alt="Placeholder Image">';
                                    }
                                    ?>
                                </div>
                                <div class="content">
                                    <div class="tag">
                                        <p class="date"><?php echo esc_html($post_date); ?></p>
                                        <h4 class=""><?php echo esc_html($post_title); ?></h4>
                                    </div>
                                    <div class="desc">
                                        <p class="details"><?php echo esc_html($post_content); ?></p>
                                        <div class="cta">
                                            <a href="<?php echo esc_url($post_permalink); ?>" target="_blank">Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 16 16" fill="none">
                                                    <path
                                                        d="M15.1381 7.52861L10.4714 2.86195C10.3457 2.74051 10.1773 2.67331 10.0025 2.67483C9.82768 2.67635 9.66047 2.74646 9.53687 2.87007C9.41326 2.99367 9.34315 3.16088 9.34163 3.33568C9.34011 3.51048 9.40731 3.67888 9.52875 3.80461L13.0574 7.33328H1.33341C1.1566 7.33328 0.987034 7.40352 0.86201 7.52854C0.736986 7.65357 0.666748 7.82313 0.666748 7.99995C0.666748 8.17676 0.736986 8.34633 0.86201 8.47135C0.987034 8.59637 1.1566 8.66661 1.33341 8.66661H13.0574L9.52875 12.1953C9.46507 12.2568 9.41429 12.3303 9.37935 12.4117C9.34441 12.493 9.32602 12.5805 9.32525 12.669C9.32448 12.7575 9.34135 12.8453 9.37487 12.9272C9.40839 13.0092 9.45789 13.0836 9.52048 13.1462C9.58308 13.2088 9.65751 13.2583 9.73945 13.2918C9.82138 13.3253 9.90916 13.3422 9.99768 13.3414C10.0862 13.3407 10.1737 13.3223 10.255 13.2873C10.3364 13.2524 10.4099 13.2016 10.4714 13.1379L15.1381 8.47128C15.2631 8.34626 15.3333 8.17672 15.3333 7.99995C15.3333 7.82317 15.2631 7.65363 15.1381 7.52861Z"
                                                        fill="#2E3094" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata(); // Reset post data query
                else:
                    ?>
                    <p><?php esc_html_e('No posts found.'); ?></p>
                <?php endif; ?>
                <div class="col-12 d-md-none mobile_view">
                    <div class="_cta">
                        <a href="<?php echo $redirect_url; ?>/blogs" target="_blank" class="cta_green c_r c_btn">View
                            all blogs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="trusted-talent l-_hpx">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="image d-lg-block d-none">
                        <img src="<?php echo $asset_path; ?>/assets/img/index/trusted-talent.png"
                            alt="Your Trusted Talent Management Agency in the Philippines">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="content">
                        <h1>Your Trusted Talent Management <span>Agency in the Philippines</span></h1>
                        <div class="image d-lg-none">
                            <img src="<?php echo $asset_path; ?>/assets/img/index/trusted-talent.png"
                                alt="Your Trusted Talent Management Agency in the Philippines">
                        </div>
                        <p class="m-0">In the vibrant world of entertainment, countless talents aim to shine, but
                            navigating the industry's complexities can be daunting. This is where a talent management
                            agency in the Philippines excels. Like us here at VCM Celebrity Source, we want to bridge
                            the gap between aspiring stars and exciting opportunities.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="what-is-talent l-_hpx">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="content">
                <div class="text">
                    <h2><span>What is a</span> Talent Management Agency?</h2>
                    <p>A talent management agency in the Philippines serves as the crucial link between artists and the
                        entertainment and endorsement industries. We specialize in discovering and connecting with
                        talent,
                        matching them with the right opportunities, and handling all negotiations and contracts.</p>
                    <p class="m-0">Our services include securing influencer campaigns, commercial endorsements, and
                        other
                        professional engagements. We also provide career development guidance and offer legal and
                        financial
                        advice to protect our clients' best interests. At VCM, we're dedicated to turning potential into
                        success, ensuring every step of your journey is expertly managed.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="stories_content lp_layout l-_hpx">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="header_content">
                <h2>Why Choose VCM as Your <span>Talent Agency in the Philippines?</span></h2>
                <p>VCM empowers your success story. Our strategic approach optimizes personal branding and prioritizes
                    your long-term goals. We are not just any talent management agency in the Philippines; we go beyond
                    initial placements, offering ongoing support throughout every campaign. </p>
                <p class="m-0">From talent matching to contract negotiation, we ensure a smooth and successful journey
                    for both brands and talent, ultimately creating success stories that elevate your marketing efforts.
                </p>
            </div>
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="stories_card">
                        <div class="header_text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15.8257 39.244L14.3079 41.872C13.9235 42.539 13.0672 42.7682 12.4017 42.3837C11.7377 42.0008 11.5071 41.1402 11.8905 40.4765L13.4078 37.8481C13.7929 37.1812 14.6486 36.952 15.3155 37.3369C15.9811 37.7224 16.2112 38.5771 15.8257 39.2441V39.244ZM18.9727 39.4486C18.7538 39.3225 18.5142 39.2623 18.2772 39.2623C17.7945 39.2623 17.3243 39.5127 17.0665 39.9599L14.6058 44.2214C14.2208 44.8874 14.4516 45.7438 15.1169 46.1286C15.7829 46.5136 16.6386 46.2844 17.0232 45.6175L19.4839 41.356C19.8684 40.689 19.6392 39.8343 18.9728 39.4487L18.9727 39.4486ZM9.22521 22.0625C9.28156 22.0149 9.27385 21.9333 9.209 21.8979L6.60031 20.4466C6.41154 20.3426 6.20744 20.3589 6.03781 20.4915C2.18 23.5344 0.0273616 28.9104 0.919061 33.2734C0.95451 33.4501 1.05236 33.5695 1.21828 33.6396L3.26506 34.5087C3.33361 34.5374 3.40402 34.4925 3.40402 34.4175C3.45431 29.4983 5.46701 25.2266 9.22521 22.0623V22.0625ZM23.279 42.4093C23.182 42.047 22.9517 41.7463 22.6308 41.56C22.4119 41.4343 22.1714 41.3741 21.9353 41.3741C21.4527 41.3741 20.9824 41.6245 20.7236 42.0716L18.6725 45.625C18.3173 46.2862 18.5501 47.1176 19.2048 47.495C19.5257 47.6804 19.9014 47.7292 20.2632 47.632C20.625 47.5349 20.9257 47.3047 21.112 46.9838L23.142 43.4677C23.3274 43.1463 23.3762 42.7711 23.279 42.4093ZM38.1684 36.694L31.6231 32.9142C30.3449 32.175 29.1525 31.4807 27.6258 31.4807C26.2613 31.4886 25.027 32.0919 23.8326 32.6761C21.9486 33.5964 19.8132 34.6395 17.5081 32.7313C16.8535 32.188 16.4794 31.3762 16.5302 30.6092C16.5775 29.9058 16.9669 29.291 17.6279 28.8789L23.0072 25.5261C21.4371 24.7453 19.9917 24.8702 18.36 25.0123C16.2053 25.1981 13.7627 25.4111 10.6079 23.6365L9.9926 23.2899C6.69435 26.1328 4.96213 29.7757 4.84211 34.1242L10.0464 36.808C10.1203 36.8455 10.1863 36.8958 10.2426 36.9563L11.4928 38.3012L12.1685 37.1318C12.9479 35.7821 14.68 35.3178 16.0312 36.0972C16.7577 36.5166 17.2274 37.2121 17.3851 37.9756C18.1249 37.7306 18.9618 37.7896 19.6883 38.209C20.4153 38.6283 20.8854 39.3239 21.0432 40.0873C21.7832 39.8424 22.6203 39.9015 23.3465 40.3208C23.9991 40.6975 24.4654 41.3076 24.6616 42.0382C24.6761 42.0919 24.6888 42.1456 24.7 42.1995C25.4401 41.9543 26.2777 42.0133 27.0046 42.4325C27.5421 42.7432 27.9541 43.2128 28.1921 43.7782L31.347 45.5987C31.9598 45.9539 32.7556 45.7411 33.1093 45.1274C33.4558 44.5256 33.2587 43.7448 32.6659 43.3823L28.8033 41.1515C28.4612 40.9538 28.3435 40.5165 28.5405 40.1739C28.7392 39.8309 29.177 39.7145 29.5196 39.9116C31.0126 40.7737 32.5058 41.6359 33.9989 42.498C34.6768 42.8899 35.5473 42.6567 35.9387 41.9785C36.3248 41.3104 36.0973 40.4415 35.4343 40.0475L31.6427 37.859C31.3011 37.6608 31.1832 37.223 31.3809 36.8805C31.579 36.5378 32.0168 36.421 32.3584 36.6188C33.8328 37.4699 35.3072 38.3211 36.7817 39.1722C37.4567 39.5617 38.3313 39.3278 38.7209 38.6526C39.1535 37.9044 38.8165 37.1673 38.1684 36.6941V36.694ZM43.9634 20.4915C43.8667 20.417 43.7608 20.3781 43.6514 20.3781C43.5671 20.3781 43.4823 20.4018 43.4005 20.4466L40.7908 21.8979C40.7549 21.9181 40.7436 21.9349 40.7396 21.9768C40.7357 22.0177 40.7435 22.0358 40.7756 22.0625C44.5338 25.2267 46.5465 29.4985 46.5968 34.4177C46.5968 34.4927 46.6672 34.5376 46.7358 34.5089L48.782 33.6398C48.9476 33.5698 49.0451 33.4496 49.0817 33.2736C49.9735 28.9106 47.8207 23.5345 43.9634 20.4915ZM39.9922 23.2768L38.7115 23.9895C36.5988 25.1646 34.2435 25.3771 31.9006 24.6051C29.8263 23.9219 27.6514 24.3177 25.2478 25.8157L18.3855 30.094C18.1144 30.2637 17.9753 30.4628 17.9591 30.7053C17.9374 31.0163 18.1197 31.3781 18.4209 31.628C19.9412 32.887 21.1671 32.3847 23.2035 31.3895C24.4797 30.7654 25.9271 30.059 27.6163 30.0486C29.4614 30.0486 30.7954 30.7816 32.3402 31.6749L38.917 35.473C39.2497 35.6597 39.6884 36.1163 39.8938 36.4434L45.1553 34.0094C45.008 29.7048 43.2718 26.0966 39.9922 23.2768ZM29.4609 46.1638L28.3459 45.52C28.2837 45.789 28.1814 46.0498 28.0398 46.2952L27.2821 47.6077L27.8801 47.944C28.9276 48.5483 29.6109 48.2201 29.9031 47.7139C30.169 47.253 30.1403 46.577 29.461 46.1638H29.4609ZM26.2888 43.6723C25.6237 43.292 24.7695 43.5126 24.3816 44.1835L22.8638 46.8129C22.4796 47.4782 22.7099 48.3354 23.3749 48.7196C24.0419 49.1041 24.8966 48.8749 25.2817 48.2089L26.7989 45.5795C27.1843 44.9156 26.9512 44.0569 26.2888 43.6723ZM14.7568 11.3374C14.7568 5.68008 19.3431 1.09375 25.0004 1.09375C30.6577 1.09375 35.2441 5.68008 35.2441 11.3374C35.2441 16.9947 30.6578 21.5811 25.0004 21.5811C19.343 21.5811 14.7568 16.9948 14.7568 11.3374ZM18.9966 11.3853L21.3904 15.5313C21.6299 15.9463 22.0121 16.2017 22.4872 16.2643C22.9622 16.3268 23.3977 16.179 23.7363 15.8402L30.7814 8.79522C31.3282 8.24844 31.3282 7.35352 30.7814 6.80674C30.2346 6.25996 29.3398 6.25996 28.7929 6.80674L22.9651 12.6346L21.432 9.9793C21.0459 9.31045 20.1801 9.07852 19.5113 9.46465C18.8416 9.85127 18.61 10.7156 18.9967 11.3854L18.9966 11.3853ZM39.7794 8.62568C39.9769 6.63672 41.5502 5.06338 43.5392 4.86592C41.5502 4.66846 39.9769 3.09512 39.7794 1.10615C39.582 3.09512 38.0086 4.66846 36.0196 4.86592C38.0086 5.06338 39.582 6.63672 39.7794 8.62568ZM9.64885 17.286C9.81037 15.6587 11.0977 14.3714 12.725 14.2099C11.0977 14.0483 9.81037 12.761 9.64885 11.1337C9.48732 12.761 8.20002 14.0483 6.57267 14.2099C8.20002 14.3714 9.48732 15.6587 9.64885 17.286Z"
                                    fill="#F2F7E0" />
                            </svg>
                            <h3>We Build Trustworthy Partnerships</h3>
                        </div>
                        <p class="m-0">In the fast-paced world of marketing, trust is vital. VCM builds enduring
                            partnerships between brands and talent, ensuring a foundation for success.</p>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="stories_card">
                        <div class="header_text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                                fill="none">
                                <path d="M14.7878 28.8262H0V48.6842H14.7878V28.8262Z" fill="#F2F7E0" />
                                <path d="M50.0007 23.7227H35.2129V48.683H50.0007V23.7227Z" fill="#F2F7E0" />
                                <path d="M32.3976 16.3184H17.6055V48.6833H32.3976V16.3184Z" fill="#F2F7E0" />
                                <path
                                    d="M42.7201 8.67773L44.8142 12.9261L49.5047 13.6084L46.1145 16.9148L46.9127 21.586L42.7201 19.3802L38.5275 21.586L39.3257 16.9148L35.9355 13.6084L40.6217 12.926L42.7201 8.67773Z"
                                    fill="#F2F7E0" />
                                <path
                                    d="M25.0814 1.31641L27.1778 5.56696L31.8682 6.24932L28.478 9.55789L29.2784 14.2246L25.0836 12.0211L20.8889 14.2246L21.687 9.55789L18.2969 6.24932L22.9851 5.56696L25.0814 1.31641Z"
                                    fill="#F2F7E0" />
                                <path
                                    d="M7.13601 13.6328L9.23016 17.8834L13.9206 18.5678L10.5326 21.8721L11.3308 26.541L7.13601 24.3375L2.94126 26.5432L3.7416 21.8743L0.351562 18.5699L5.03978 17.8855L7.13601 13.6328Z"
                                    fill="#F2F7E0" />
                            </svg>
                            <h3>Our Passion Fuels Extraordinary Results</h3>
                        </div>
                        <p class="m-0">As a leading talent management agency in the Philippines, passion is more than
                            just a buzzword for us at VCM. It's our unwavering dedication that fuels exceptional results
                            for both our talent and clients.</p>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="stories_card">
                        <div class="header_text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M32.3069 38.9587V42.2576C32.3049 43.1425 31.9524 43.9905 31.3268 44.6162C30.7011 45.2419 29.853 45.5943 28.9682 45.5964H27.2917V46.8055C27.2909 47.0827 27.1804 47.3483 26.9844 47.5443C26.7884 47.7403 26.5228 47.8507 26.2456 47.8516H22.4766C22.1994 47.8507 21.9338 47.7403 21.7378 47.5443C21.5418 47.3482 21.4314 47.0826 21.4306 46.8055V45.5964H19.754C18.8691 45.5943 18.0211 45.2419 17.3954 44.6162C16.7697 43.9905 16.4173 43.1425 16.4152 42.2576V38.9587C16.4152 33.0674 10.039 32.295 10.039 22.1188C10.039 18.3204 11.548 14.6776 14.2339 11.9917C16.9198 9.30577 20.5627 7.79683 24.3611 7.79678C24.5683 7.79678 24.767 7.87909 24.9136 8.0256C25.0601 8.17211 25.1424 8.37083 25.1424 8.57803C25.1424 8.78523 25.0601 8.98394 24.9136 9.13046C24.767 9.27697 24.5683 9.35928 24.3611 9.35928C22.6855 9.35932 21.0263 9.68939 19.4783 10.3307C17.9303 10.9719 16.5237 11.9118 15.3389 13.0967C14.1541 14.2815 13.2143 15.6882 12.5731 17.2362C11.9319 18.7843 11.6019 20.4435 11.602 22.1191C11.602 31.409 17.4704 32.1869 17.9476 38.1777H31.5257C31.7329 38.1777 31.9316 38.26 32.0781 38.4066C32.2246 38.5531 32.3069 38.7518 32.3069 38.959V38.9587ZM33.2383 23.5694C32.7254 23.8922 32.1317 24.0634 31.5257 24.0634C30.9197 24.0634 30.326 23.8922 29.8131 23.5694C28.9558 23.8676 28.1908 24.3836 27.5931 25.0667C26.9955 25.7498 26.5857 26.5766 26.4041 27.4659C27.0607 28.1663 27.854 28.7246 28.7349 29.1063C29.6158 29.4879 30.5656 29.6848 31.5257 29.6848C32.4857 29.6848 33.4356 29.4879 34.3165 29.1063C35.1974 28.7246 35.9907 28.1663 36.6473 27.4659C36.4656 26.5766 36.0559 25.7498 35.4582 25.0667C34.8606 24.3836 34.0956 23.8676 33.2383 23.5694ZM31.5257 18.4152C31.0444 18.4152 30.5739 18.558 30.1738 18.8253C29.7736 19.0927 29.4617 19.4728 29.2775 19.9174C29.0933 20.3621 29.0451 20.8513 29.139 21.3234C29.2329 21.7954 29.4647 22.229 29.805 22.5693C30.1453 22.9096 30.5789 23.1414 31.051 23.2353C31.523 23.3292 32.0123 23.281 32.4569 23.0968C32.9016 22.9126 33.2816 22.6007 33.549 22.2006C33.8164 21.8004 33.9591 21.3299 33.9591 20.8486C33.9591 20.2033 33.7027 19.5843 33.2464 19.128C32.79 18.6716 32.1711 18.4152 31.5257 18.4152ZM45.3978 25.1105C45.6809 23.4909 45.6809 21.8344 45.3978 20.2148H42.8435C42.5488 18.8557 42.0117 17.5609 41.2577 16.3923L43.0644 14.5856C42.1201 13.2396 40.9487 12.0682 39.6026 11.1239L37.7976 12.9292C36.6278 12.1772 35.3325 11.6414 33.9733 11.3472V8.79053C32.3538 8.50718 30.6974 8.50718 29.0778 8.79053V11.3447C27.7188 11.6396 26.4239 12.1768 25.2553 12.9306L23.4486 11.1239C22.1026 12.0682 20.9313 13.2396 19.987 14.5856L21.7922 16.3908C21.0403 17.5606 20.5044 18.8559 20.2102 20.215H17.6535C17.3701 21.8346 17.3701 23.4911 17.6535 25.1106H20.2102C20.5044 26.4697 21.0403 27.765 21.7922 28.9348L19.987 30.7399C20.9312 32.086 22.1026 33.2574 23.4486 34.2017L25.2553 32.395C26.4239 33.1489 27.7188 33.686 29.0778 33.9809V36.5351C30.6974 36.8184 32.3538 36.8184 33.9733 36.5351V33.9784C35.3325 33.6842 36.6278 33.1484 37.7976 32.3964L39.6026 34.2016C40.9487 33.2573 42.1201 32.0859 43.0644 30.7398L41.2577 28.9332C42.0116 27.7647 42.5488 26.4698 42.8435 25.1107L45.3978 25.1105ZM37.043 17.1453C35.9517 16.0541 34.5614 15.3109 33.0478 15.0098C31.5343 14.7088 29.9654 14.8633 28.5396 15.4539C27.1138 16.0444 25.8952 17.0445 25.0378 18.3277C24.1805 19.6108 23.7228 21.1194 23.7228 22.6626C23.7228 24.2059 24.1805 25.7145 25.0378 26.9976C25.8952 28.2808 27.1138 29.2809 28.5396 29.8714C29.9654 30.462 31.5343 30.6165 33.0478 30.3154C34.5614 30.0144 35.9517 29.2712 37.043 28.18C38.5062 26.7167 39.3283 24.732 39.3283 22.6626C39.3283 20.5932 38.5062 18.6086 37.043 17.1453ZM11.7662 36.6616L13.4537 34.974C13.596 34.8267 13.6748 34.6293 13.673 34.4245C13.6712 34.2197 13.589 34.0237 13.4442 33.8789C13.2993 33.734 13.1034 33.6518 12.8986 33.6501C12.6937 33.6483 12.4964 33.727 12.349 33.8693L10.6614 35.5566C10.5875 35.6289 10.5287 35.7151 10.4884 35.8102C10.448 35.9053 10.427 36.0075 10.4264 36.1108C10.4258 36.2142 10.4457 36.3166 10.485 36.4122C10.5243 36.5077 10.5821 36.5946 10.6552 36.6676C10.7283 36.7407 10.8151 36.7986 10.9107 36.8378C11.0063 36.8771 11.1087 36.897 11.212 36.8965C11.3153 36.8959 11.4175 36.8748 11.5127 36.8345C11.6078 36.7941 11.694 36.7353 11.7662 36.6614V36.6616ZM22.9837 2.92969C22.9837 2.72249 23.066 2.52377 23.2125 2.37726C23.359 2.23075 23.5577 2.14844 23.7649 2.14844C23.9721 2.14844 24.1709 2.23075 24.3174 2.37726C24.4639 2.52377 24.5462 2.72249 24.5462 2.92969V5.31631C24.5462 5.52351 24.4639 5.72222 24.3174 5.86874C24.1709 6.01525 23.9721 6.09756 23.7649 6.09756C23.5577 6.09756 23.359 6.01525 23.2125 5.86874C23.066 5.72222 22.9837 5.52351 22.9837 5.31631V2.92969ZM9.81836 9.52393L11.506 11.2115C11.5781 11.2858 11.6643 11.345 11.7595 11.3857C11.8548 11.4264 11.9571 11.4477 12.0607 11.4485C12.1642 11.4492 12.2669 11.4294 12.3627 11.3901C12.4585 11.3509 12.5456 11.2929 12.6188 11.2197C12.6921 11.1465 12.75 11.0594 12.7893 10.9636C12.8286 10.8678 12.8484 10.7651 12.8477 10.6616C12.8469 10.558 12.8256 10.4557 12.7849 10.3604C12.7442 10.2652 12.685 10.179 12.6107 10.1068L10.9231 8.41924C10.851 8.34495 10.7648 8.28574 10.6696 8.24506C10.5743 8.20438 10.472 8.18304 10.3684 8.18228C10.2649 8.18152 10.1622 8.20135 10.0664 8.24063C9.97056 8.2799 9.8835 8.33783 9.81028 8.41106C9.73705 8.48428 9.67911 8.57133 9.63982 8.66714C9.60054 8.76296 9.5807 8.86563 9.58145 8.96918C9.5822 9.07274 9.60353 9.17511 9.6442 9.27034C9.68488 9.36558 9.74408 9.45178 9.81836 9.52393ZM5.17188 23.4961C4.96467 23.4961 4.76596 23.4138 4.61945 23.2673C4.47293 23.1208 4.39062 22.922 4.39062 22.7148C4.39062 22.5076 4.47293 22.3089 4.61945 22.1624C4.76596 22.0159 4.96467 21.9336 5.17188 21.9336H7.55898C7.76618 21.9336 7.9649 22.0159 8.11141 22.1624C8.25792 22.3089 8.34023 22.5076 8.34023 22.7148C8.34023 22.922 8.25792 23.1208 8.11141 23.2673C7.9649 23.4138 7.76618 23.4961 7.55898 23.4961H5.17188Z"
                                    fill="#F2F7E0" />
                            </svg>
                            <h3>Our Hands-On Approach Makes It Happen</h3>
                        </div>
                        <p class="m-0">We don't just talk strategy; we roll up our sleeves and execute to deliver
                            impactful results for your brand and talent. Expect a dedicated team by your side, every
                            step of the way.</p>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="stories_card">
                        <div class="header_text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                                fill="none">
                                <g clip-path="url(#clip0_4783_12037)">
                                    <path
                                        d="M29.7729 21.5801H20.2185C19.36 21.5801 18.6641 22.276 18.6641 23.1345V49.4817C18.6641 49.7679 18.8961 49.9999 19.1822 49.9999H30.8092C31.0953 49.9999 31.3273 49.7679 31.3273 49.4817V23.1345C31.3273 22.276 30.6314 21.5801 29.7729 21.5801Z"
                                        fill="#F2F7E0" />
                                    <path
                                        d="M45.5512 30.9316H35.9978C35.1393 30.9316 34.4434 31.6276 34.4434 32.4861V49.4809C34.4434 49.7671 34.6754 49.9991 34.9615 49.9991H46.5875C46.8736 49.9991 47.1056 49.7671 47.1056 49.4809V32.4861C47.1056 31.6276 46.4096 30.9316 45.5512 30.9316Z"
                                        fill="#F2F7E0" />
                                    <path
                                        d="M14.0004 37.7988H4.44699C3.58854 37.7988 2.89258 38.4948 2.89258 39.3532V49.4818C2.89258 49.7679 3.1246 49.9999 3.41071 49.9999H15.0367C15.3228 49.9999 15.5548 49.7679 15.5548 49.4818V39.3532C15.5548 38.4948 14.8588 37.7988 14.0004 37.7988Z"
                                        fill="#F2F7E0" />
                                    <path
                                        d="M31.8104 4.78367L28.3785 3.81942C28.1385 3.75196 27.9308 3.60025 27.7936 3.39216L25.8645 0.465935C25.4549 -0.155311 24.5436 -0.155311 24.1341 0.465935L22.2051 3.39216C22.0679 3.60035 21.8602 3.75206 21.6202 3.81942L18.1883 4.78367C17.4677 4.98616 17.1928 5.86212 17.6686 6.43995L19.8783 9.124C20.0428 9.32379 20.1266 9.57789 20.1131 9.83634L19.9282 13.4052C19.8891 14.1594 20.644 14.7007 21.3458 14.4217L24.6166 13.1216C24.8624 13.0239 25.1363 13.0239 25.3821 13.1216L28.6529 14.4217C29.3547 14.7007 30.1096 14.1594 30.0705 13.4052L29.8855 9.83634C29.8721 9.57789 29.9559 9.32379 30.1203 9.124L32.3301 6.43995C32.8058 5.86212 32.5309 4.98606 31.8104 4.78367Z"
                                        fill="#F2F7E0" />
                                    <path
                                        d="M8.85571 15.0517L12.5782 13.2921C13.3544 12.9253 13.6861 11.9986 13.3193 11.2226C12.9523 10.4464 12.0257 10.1146 11.2497 10.4815L7.52721 12.2411C6.75104 12.608 6.41933 13.5346 6.78617 14.3107C7.15332 15.0873 8.08027 15.4183 8.85571 15.0517Z"
                                        fill="#F2F7E0" />
                                    <path
                                        d="M38.7516 5.52696L42.3984 3.79255C43.1736 3.42384 43.5032 2.49648 43.1345 1.72124C42.7657 0.946112 41.8385 0.616162 41.0632 0.985076L37.4165 2.71949C36.6412 3.08819 36.3116 4.01555 36.6803 4.79079C37.0493 5.56675 37.9772 5.89536 38.7516 5.52696Z"
                                        fill="#F2F7E0" />
                                    <path
                                        d="M7.52721 3.79601L11.2497 5.55561C11.4643 5.65706 11.6903 5.70504 11.9129 5.70504C12.4954 5.70504 13.0539 5.37612 13.3193 4.81457C13.6862 4.0385 13.3544 3.11186 12.5782 2.74502L8.85571 0.985431C8.07954 0.618486 7.15301 0.950301 6.78617 1.72647C6.41933 2.50254 6.75104 3.42917 7.52721 3.79601Z"
                                        fill="#F2F7E0" />
                                    <path
                                        d="M37.4165 13.316L41.0632 15.0503C41.8387 15.4191 42.766 15.0892 43.1345 14.3141C43.5033 13.5389 43.1737 12.6114 42.3984 12.2428L38.7516 10.5085C37.9762 10.1397 37.0489 10.4694 36.6803 11.2447C36.3116 12.0199 36.6412 12.9474 37.4165 13.316Z"
                                        fill="#F2F7E0" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_4783_12037">
                                        <rect width="50" height="50" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <h3>We Strategize for Long Term Success</h3>
                        </div>
                        <p class="m-0">As a leading talent management agency in the Philippines, we go beyond just
                            managing talent. We develop strategic, long-term partnerships that deliver lasting success
                            for both brands and artists.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

<script>
    $(document).ready(function () {
        $('#brands').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            dots: false,
            autoplay: true,
            autoplaySpeed: 5000,
            autoplayTimeout: 5000, // Small timeout for smooth continuous scroll
            autoplayHoverPause: false, // Disable pause on hover for continuous scroll
            slideTransition: 'linear', // Linear transition for smooth effect
            responsive: {
                0: {
                    items: 3
                },
                576: {
                    items: 4
                },
                768: {
                    items: 5
                },
                992: {
                    items: 6
                },
                1200: {
                    items: 7
                },
                1441: {
                    items: 9
                }
            }
        });
    });
    $(document).ready(function () {
        $('#personalities').owlCarousel({
            loop: false, // Disable looping
            rewind: true, // Enable rewinding to the first item
            nav: false,
            dots: false,
            autoplay: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            autoplayTimeout: 3000,
            mouseDrag: false, // Disable mouse dragging
            responsive: {
                0: {
                    items: 1
                }
            }
        });
    });

    $(document).ready(function () {
        $('#testimonial').owlCarousel({
            loop: false, // Disable looping
            rewind: true, // Enable rewinding to the first item
            nav: false,
            dots: true, // Enable dots
            autoplay: true,
            autoplayTimeout: 10000, // Set autoplay speed to 5 seconds
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            autoHeight: true, // Ensure all items have the same height
            mouseDrag: false, // Disable mouse dragging
            responsive: {
                0: {
                    items: 1
                }
            }
        });

        // Move the dots to the desired location if the screen width is 992px or more
        function moveDots() {
            if ($(window).width() >= 992) {
                var dots = $('#testimonial .owl-dots');
                $('.testimonial_content').append(dots);
            }
        }

        // Initial call
        moveDots();

        // Recheck on window resize
        $(window).resize(function () {
            moveDots();
        });
    });
    $(document).ready(function () {
        $('#services').owlCarousel({
            loop: false,
            rewind: true,
            margin: 20,
            nav: true,
            autoplay: true,
            autoplayTimeout: 10000, // Set autoplay speed to 5 seconds
            dots: false,
            autoplay: true,
            autoHeight: true, // Ensure all items have the same height
            responsive: {
                0: {
                    items: 1
                },
                1200: {
                    items: 2
                }
            }
        });

        // Move the dots to the desired location if the screen width is 992px or more
        function moveNav() {
            if ($(window).width() >= 992) {
                var nav = $('#services .owl-nav');
                $('section.index_services .header_content').append(nav);
            }
        }

        // Initial call
        moveNav();

        // Recheck on window resize
        $(window).resize(function () {
            moveNav();
        });
        $('section.index_services .owl-nav button.owl-prev span').replaceWith(`
      <svg xmlns="http://www.w3.org/2000/svg" width="23" height="24" viewBox="0 0 23 24" fill="none">
        <g clip-path="url(#clip0_2062_3241)">
        <path d="M9.33246 12.0048L17.7497 3.5872C17.9814 3.35598 18.1089 3.04683 18.1089 2.7172C18.1089 2.38738 17.9814 2.07841 17.7497 1.84683L17.0121 1.10963C16.7807 0.877683 16.4714 0.75 16.1417 0.75C15.8121 0.75 15.5031 0.877683 15.2715 1.10963L5.24953 11.1315C5.01703 11.3638 4.88972 11.6742 4.89063 12.0042C4.88972 12.3357 5.01685 12.6457 5.24953 12.8782L15.2622 22.8904C15.4938 23.1223 15.8028 23.25 16.1326 23.25C16.4622 23.25 16.7712 23.1223 17.0029 22.8904L17.7403 22.1532C18.2201 21.6734 18.2201 20.8923 17.7403 20.4126L9.33246 12.0048Z" fill="#F2F7E0"/>
        </g>
        <defs>
            <clipPath id="clip0_2062_3241">
            <rect width="22.5" height="22.5" fill="white" transform="translate(0.25 0.75)"/>
            </clipPath>
        </defs>
        </svg>
    `);
        $('section.index_services .owl-nav button.owl-next span').replaceWith(`
             <svg xmlns="http://www.w3.org/2000/svg" width="23" height="24" viewBox="0 0 23 24" fill="none">
        <g clip-path="url(#clip0_2062_3241)">
        <path d="M9.33246 12.0048L17.7497 3.5872C17.9814 3.35598 18.1089 3.04683 18.1089 2.7172C18.1089 2.38738 17.9814 2.07841 17.7497 1.84683L17.0121 1.10963C16.7807 0.877683 16.4714 0.75 16.1417 0.75C15.8121 0.75 15.5031 0.877683 15.2715 1.10963L5.24953 11.1315C5.01703 11.3638 4.88972 11.6742 4.89063 12.0042C4.88972 12.3357 5.01685 12.6457 5.24953 12.8782L15.2622 22.8904C15.4938 23.1223 15.8028 23.25 16.1326 23.25C16.4622 23.25 16.7712 23.1223 17.0029 22.8904L17.7403 22.1532C18.2201 21.6734 18.2201 20.8923 17.7403 20.4126L9.33246 12.0048Z" fill="#F2F7E0"/>
        </g>
        <defs>
            <clipPath id="clip0_2062_3241">
            <rect width="22.5" height="22.5" fill="white" transform="translate(0.25 0.75)"/>
            </clipPath>
        </defs>
        </svg>
    `);
    });
    document.addEventListener('DOMContentLoaded', function () {
        // Function to animate the counting
        function animateCount(element) {
            const target = parseInt(element.getAttribute('data-target'), 10);
            let count = 0;
            const increment = target / 200; // Adjust this to change the animation speed

            function updateCount() {
                count += increment;
                if (count >= target) {
                    element.textContent = target;
                } else {
                    element.textContent = Math.ceil(count);
                    requestAnimationFrame(updateCount);
                }
            }

            updateCount();
        }

        // Select all elements with the class 'count' and animate them
        const counters = document.querySelectorAll('.count');
        counters.forEach(counter => {
            animateCount(counter);
        });
    });

</script>