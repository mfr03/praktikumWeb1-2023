<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'conn.php'?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-utilities.css">
    <link rel="stylesheet" href="styles.css"/>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-fluid min-vh-100 d-sm-flex flex-column p-0 m-0">
        <nav class="navbar fixed-top navbar-expand-sm" id="navigation">
            <a class="navbar-brand" href="#">
                <img src="src/hellomalove-removebg-preview (2).png" alt="" class="img-fluid" id="oceanLogo">
            </a>
            <div class="container-fluid justify-content-end">
                <ul class="nav nav-pills nav-fill justify-content-around" id="fields">
                    <li>
                        <a class="nav-items nav-link text-light navbar-brand fw-bold" href="#actions">Actions</a>
                    </li>
                    <li>
                        <a class="nav-items nav-link text-light navbar-brand fw-bold" href="#resources">Resources</a>
                    </li>
                    <li>
                        <a class="nav-items nav-link text-light navbar-brand fw-bold" href="#teleportToProjects">Projects</a>
                    </li>
                    <li>
                        <a class="nav-items nav-link text-light navbar-brand fw-bold" href="#explore">Explore</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid position-absolute min-vh-100 text-sm-center d-sm-flex flex-column justify-content-sm-center gap-3 z-1 text-light fw-semibold
                    titles">
            <div class="fs-1">
                Ocean One
            </div>
            <div class="fs-3 ">
                Join the Ocean One: <br>
                Protect and Preserve Our Ocean's Future
            </div>
            <div class="p-3">
                <button type="button" class="btn btn-primary btn-lg">
                    Join Us
                </button>
            </div>
        </div>
        <div class="container-fluid position-absolute object-fit-fill zn-1 p-0"id="bg-1" style="max-height: 100%; overflow:hidden;">
            <video class="object-fit-scale" autoplay loop muted id="vod"> 
                <source src="video/fishes.mp4" type="video/mp4">
            </video>
        </div>
    </div>
    <div class="container-fluid min-vh-100 d-sm-flex flex-sm-column justify-content-sm-center gap-sm-5" id="actions">
        <div class="container-fluid row justify-content-evenly"> 
            <div class="col-4 border align-self-center bg-black" style="min-height:5px;"></div>
            <div class="col-4 fs-1 text-center titles" >
                OFFSET YOUR
                PLASTIC FOOTPRINT
                <div class="border-5 container-fluid position-absolute" style="min-height:10px; "></div>
            </div>
            <div class="col-4 border align-self-center bg-black" style="min-height:5px;"></div>
        </div>
        <div class="container-fluid row justify-content-evenly ">
            <div class="col-3 d-sm-flex flex-sm-column card">
                <div class="card-body">
                    <p class="card-title text-center">ALIGN</p>
                    <p>
                        <?php include 'phpcodes/alignp.php'?>            
                    </p>

                </div>                 
                <button type="button" class="mb-3 btn btn-primary btn-lg container-fluid">LEARN MORE</button>
            </div>
            <div class="col-3 d-sm-flex flex-sm-column card">
                <div class="card-body">
                    <p class="card-title text-center">KICKSTART</p>
                    <p>
                        <?php include 'phpcodes/kickstartp.php'?>    
                    </p>

                </div>                   
                <button type="button" class="mb-3 btn btn-primary btn-lg container-fluid">START ACTION</button>
            </div>
            <div class="col-3 d-sm-flex flex-sm-column card">
                <div class="card-body">
                    <p class="card-title text-center">AMPLIFY</p>
                    <p>
                        <?php include 'phpcodes/amplifyp.php'?>   
                    </p>
                </div>
                <button type="button" class="mb-3 btn btn-primary btn-lg container-fluid">SEE HOW</button>
            </div>
        </div>
    </div>

    <div class="container-fluid min-vh-100 d-sm-flex flex-sm-column justify-content-sm-center" id="resources">
        <div class="container-fluid row">
            <div class="col-4 border align-self-center bg-black" style="min-height:5px;"></div>
            <p class="col-4 fs-1 text-center titles">
                MAKE YOUR IMPACT
            </p>
            <div class="col-4 border align-self-center bg-black" style="min-height:5px;"></div>
        </div>
        <div id="carousel_1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                   <div class="carousel-item active">
                       <div class="row align-items-center page rounded-5">
                           <div class="col-md py-2 d-sm-flex flex-column justify-content-center gap-2 ">
                               <p class="fs-4 text-center"> Commit to removing a specific amount of waste </p>
                               <p class="col-6 text-center align-self-center"> Microplastics are small plastic particles that are often found in personal care and 
                                cleaning products, such as facial scrubs, toothpaste, and laundry detergents. These microplastics can end up in the ocean and harm marine life. 
                                One way to reduce the amount of microplastics in the ocean is to choose products that are labeled as "microbead-free" or "microplastic-free". 
                                Alternatively, you can make your own natural household products, such as toothpaste and cleaning solutions, using simple ingredients like baking soda and vinegar.
                                By doing so, you can reduce the amount of microplastics that end up in the ocean and help protect marine life.
                               </p>
                               <button class="btn btn-primary w-50 align-self-center">Learn More Here</button>
                           </div>
                           <div class="col-md py-2" style="margin-right:0.5%;">
                               <img class="d-block img-fluid rounded-3" src="src/firstSlide.jpg" alt="First slide">
                           </div>
                       </div>
                   </div>
                   <div class="carousel-item">
                        <div class="row align-items-center page rounded-5">
                        <div class="col-md py-2 d-sm-flex flex-column justify-content-center gap-2">
                                <p class="fs-4 text-center">Tie removal to product sales </p>
                                <p class="col-6 text-center align-self-center"> Some businesses have implemented programs where they tie the removal of plastic waste to their product sales. 
                                    For example, a surfboard company may commit to removing a certain amount of plastic waste from the ocean for every surfboard sold. 
                                    By supporting businesses with these types of programs, you can help incentivize companies to take action to reduce plastic
                                     waste and contribute to the removal of a specific amount of waste from the ocean. 
                                    Additionally, you can encourage other businesses to adopt similar programs by expressing your support for these types of initiatives..
                                 </p>
                                <button class="btn btn-primary w-50 align-self-center">Learn More Here</button>
                            </div>
                        <div class="col-md py-2" style="margin-right:0.5%;">
                            <img class="d-block img-fluid rounded-3" src="src/secSlide.jpg" alt="Second slide">
                        </div>
                    </div>
                   </div>
                   <div class="carousel-item">
                    <div class="row align-items-center page rounded-5">
                    <div class="col-md py-2 d-sm-flex flex-column justify-content-center gap-2">
                            <p class="fs-4 text-center">Incentivize community actions</p>
                            <p class="col-6 text-center align-self-center"> One way to incentivize community actions to reduce plastic waste in the ocean is to create cleanup incentives. 
                                For example, you could organize a beach cleanup event and offer rewards or prizes for the most trash collected or the most participants involved.
                                By creating a fun and engaging atmosphere around cleanup efforts, you can encourage more people to get involved and take action to reduce plastic waste in the ocean. 
                                Additionally, you can partner with local businesses or organizations to offer discounts or rewards for individuals 
                                who participate in cleanup efforts or commit to reducing their plastic waste consumption.
                             </p>
                            <button class="btn btn-primary w-50 align-self-center">Learn More Here</button>
                        </div>
                    <div class="col-md py-2" style="margin-right:0.5%;">
                        <img class="d-block img-fluid rounded-3" src="src/thirdSlide.jpg" alt="Third slide">
                    </div>
                </div>
               </div>
                   <button class="carousel-control-prev position-absolute" type="button" data-bs-target="#carousel_1" data-bs-slide="prev" style="left:50%;">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span>Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel_1" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span >Next</span>
                    </button>
            </div>
     </div>
    </div>
    <div id="teleportToProjects" style="min-height: 6vh;"></div>
    <div class="container-fluid min-vh-100 row p-0" style="max-height: 100vh;" id="projects">
        <div class="col-4 border align-self-center bg-black" style="min-height:5px;"></div>
        <div class="container-fluid col-4 justify-content-center" style="max-height:11vh;">
            <p class="col-sm-12 fs-5 text-center titles p-0 m-0">Project 1</p>
            <p class="col-sm-12 fs-1 text-center titles p-0 m-0">OCEANBOUND CLEAN UP</p>           
        </div>
        <div class="col-4 border align-self-center bg-black" style="min-height:5px;"></div>
        <div class="container-fluid col-12 row gx-0" style="max-height: 89vh;">
            <img class="img-fluid col-6 h-50" src="src/p1.jpg">
            <div class="col-6 h-50">
                <div class="container-fluid h-100 d-sm-flex flex-column px-5 justify-content-center"> 
                    <p class="flex-item">PROBLEMS</p>
                    <p class="flex-item">
                        Plastic recycling is an essential process for reducing waste and conserving resources. However, it generates a significant challenge in the form of plastic waste effluent, also known as "Mud." This sludge-like substance is produced during the melting down and mixing of plastics, creating a dirty discharge that must be disposed of properly. 
                        The improper handling of plastic waste effluent can lead to severe environmental risks, including contamination of waterways and harm to aquatic life. The discharge of Mud into wastewater is common, but it must be treated properly to avoid adverse impacts on the environment and human health. In some cases, the Mud must be transported to a separate location for proper disposal, which can add to the overall environmental impact and increase the cost of recycling.
                        Despite the challenges posed by plastic waste effluent, it's essential to continue investing in plastic recycling technologies and waste management practices to minimize the negative impacts of plastic waste. By doing so, we can work towards a more sustainable future and promote the circular economy. Additionally, increasing public awareness of the importance of responsible plastic waste disposal and recycling can help reduce the amount of plastic waste that ends up in landfills and the environment.
                    </p>
                </div>
            </div>
            <div class="col-6 h-50 ">
                <div class="container-fluid h-100 d-sm-flex flex-column px-5 justify-content-center text-sm-end"> 
                    <p class="flex-item">SOLUTION</p>
                    <p class="flex-item">
                        Recycling is a crucial process for reducing waste and conserving resources. However, it often generates plastic waste effluent, or "Mud," which is challenging to dispose of properly. To address this issue, some innovative solutions repurpose Mud into useful building materials. This sludge-like substance is created when plastics are melted down and mixed together during the recycling process.
                        Mud is an ideal material for producing bricks, which can be made by mixing it with cement and other binding agents. These recycled plastic compound bricks are strong, durable, and comparable in quality to traditional clay bricks. Moreover, they offer several advantages, such as better insulation properties, which can reduce energy consumption in buildings. Additionally, these bricks can be manufactured in a variety of colors and textures, providing architects and builders with more design options.
                        Despite the advantages of recycled plastic compound bricks, they are more expensive than standard building bricks. To promote their use and incentivize their reuse, programs like the Impact program make them competitive on the open market. By doing so, they not only help reduce plastic waste and conserve resources but also promote sustainable building practices. Repurposing Mud into eco-friendly building materials like recycled plastic compound bricks offers a promising solution to the challenges posed by plastic recycling.
                    </p>
                </div>
            </div>
            <img class="img-fluid col-6 h-50" src="src/s1.jpeg">
        </div>
    </div>
    <div class="container-fluid min-vh-100 row p-0" style="max-height: 100vh; margin-top:5%; ">
            <div class="col-sm-4 border align-self-center bg-black" style="min-height:5px;"></div>
            <div class="container-fluid col-sm-4 justify-content-center" style="max-height:11vh;">
                <p class="col-sm-12 fs-5 text-center titles p-0 m-0">Project 2</p>
                <p class="col-sm-12 fs-1 text-center titles p-0 m-0">FISHING NET RECOVERY</p>           
            </div>
            <div class="col-sm-4 border align-self-center bg-black" style="min-height:5px;"></div>
            <div class="container-fluid col-12 row gx-0" style="max-height: 89vh;">
                <img class="img-fluid col-6 h-50" src="src/p2.jpg">
                <div class="col-6 h-50">
                    <div class="container-fluid h-100 d-sm-flex flex-column px-5 justify-content-center"> 
                        <p class="flex-item">PROBLEMS</p>
                        <p class="flex-item">
                            Fishing gear, such as nets and ropes, is a significant source of plastic pollution in the world's oceans. When these materials are cut away in the ocean, they can continue to trap and kill marine life, including whales, dolphins, and sea turtles. According to some estimates, abandoned fishing gear represents up to 10% of all ocean plastic waste. These lost or discarded fishing nets, known as "ghost nets," can drift for years and continue to entangle marine life and damage underwater ecosystems.                             
                            Despite the devastating impact of discarded fishing gear, there are currently no effective incentives or regulations to ensure proper disposal and recycling of this equipment. Many fishermen dispose of their old nets and ropes by simply cutting them loose in the ocean, where they continue to pose a threat to marine life for years. Moreover, these discarded materials often end up washing up on beaches, causing further environmental damage and posing a risk to public health. The lack of action and awareness regarding this issue makes fishing gear a persistent and significant threat to ocean health and biodiversity.
                        </p>
                    </div>
                </div>
                <div class="col-6 h-50 ">
                    <div class="container-fluid h-100 d-sm-flex flex-column px-5 justify-content-center text-sm-end"> 
                        <p class="flex-item">SOLUTION</p>
                        <p class="flex-item">
                            We recognize the importance of addressing the issue of abandoned fishing gear and are committed to supporting solutions that promote responsible disposal and recycling of this equipment. To this end, we provide funding to incentivize the collection and recycling of end-of-life fishing gear. By offering financial support to individuals and organizations involved in the recovery and recycling of fishing gear, we can help create a sustainable pathway for the reclamation of this equipment and reduce its impact on the environment.
                            Through our program, we aim to create a network of stakeholders who are committed to protecting the health and biodiversity of our oceans. By working with fishermen, governments, and conservation organizations, we can promote responsible disposal of fishing gear and develop innovative solutions for recovering and recycling these materials. By supporting the collection and recycling of end-of-life fishing gear, we can help reduce the amount of plastic waste in our oceans and protect marine life from the devastating effects of ghost nets.
                        </p>
                    </div>
                </div>
                <img class="img-fluid col-6 h-50" src="src/s2.png">
            </div>
    </div>
    <div class="container-fluid min-vh-100 d-sm-flex flex-column m-0 p-0" id="explore">
        <div class="flex-item row" style="min-height:20vh;">
            <div class="col-4 border align-self-center bg-black" style="min-height:5px;"></div>
            <p class="col-4 fs-1 align-self-center text-center titles">
                GET IN TOUCH
            </p>
            <div class="col-4 border align-self-center bg-black" style="min-height:5px;"></div>
        </div>
        <div class="container=fluid row" style="min-height:70vh;">
            <div class="col-6 overflow-y-hidden" style="min-height:100%;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d831.0448540876305!2d110.37418514495661!3d-7.77520809808002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a594831b5c1ab%3A0x1bfb10598dd65270!2sGedung%20Herman%20Yohannes%20Sekolah%20Vokasi%20UGM!5e0!3m2!1sid!2sid!4v1683389617292!5m2!1sid!2sid"
                 style="border:0; width:100%; height:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-6 h-100">
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name">
                  </div>
                <div class="mb-3">
                    <label for="emailAddress" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="emailAddress" placeholder="Email">
                  </div>
                  <div class="mb-3">
                    <label for="messages" class="form-label">Messages</label>
                    <textarea class="form-control" id="messages" rows="3" placeholder="Write your messages here..."></textarea>
                  </div>
                <button type="button" class="btn btn-primary btn-lg">SEND</button>
            </div>
        </div>
        <footer class="container-fluid m-0 p-0 row" style="min-height: 10vh; background-color:#1768AC;">
            <div class="col-6">
                <div class="navbar">
                    <a class="navbar-brand" href="#">
                    <img src="src/hellomalove-removebg-preview (2).png" alt="Logo" class="d-inline-block text-center rounded-circle img-fluid" style="max-height:80px;">
                    <span class="text-light fw-bold">Ocean One</span>
                  </a>  
                </div>

            </div>
            <div class="col-6 d-sm-flex">
                <ul class="navbar nav-pills flex-fill nav-fill justify-content-around align-content-center">
                    <li>
                        <a class="nav-items nav-link text-light navbar-brand fw-bold" href="#">Newsletter</a>
                    </li>
                    <li>
                        <a class="nav-items nav-link text-light navbar-brand fw-bold" href="#teleportToProjects">Privacy Policy</a>
                    </li>
                    <li>
                        <a class="nav-items nav-link text-light navbar-brand fw-bold" href="#explore">FAQs</a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
</div>
    <script src="js/bootstrap.min.js"></script>
    <script>
        var video = document.querySelector('video');
		video.addEventListener('ended', function() {
			video.classList.add('hide');
			video.addEventListener('transitionend', function() {
				video.classList.remove('hide');
			}, {once: true});
		});
    </script>
    <script>
        const navEl = document.querySelector('.navbar');
        const navLogo = document.getElementById('oceanLogo');
        let _1vh = Math.round(window.innerHeight / 100)
        window.addEventListener('scroll', () =>
        {
            if(window.scrollY >= _1vh * 95)
            {
                navEl.classList.add('navbar-scrolled');
                navLogo.style.display='None';
            }
            else if(window.scrollY < _1vh * 95)
            {
                navEl.classList.remove('navbar-scrolled');
                navLogo.style.display='inline';
            }
        });
    </script>
</body>

</html>
