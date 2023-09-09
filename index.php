<?php 
include 'header.php'; 
include 'nav.php'; 
?>

<div class="mt-5">
    <h1 class="animated-header">Welcome to My Portfolio Website!</h1>
    <p>My name is Mikko Rautavirta.</p>
    <p>I am an IT-Student</p>
    <p>This is a simple portfolio website created using PHP.</p>
    <p>It is a work in progress, so please check back later for more updates.</p>
    <p>Thank you for visiting!</p>

    <?php   
    $site_info = [
        'name' => 'My Portfolio Website',
        'description' => 'A simple portfolio website created using PHP',
    ];
    ?>
    <h2>Site Info</h2>
    <p>Site Name: <?php echo $site_info['name']; ?></p>
    <p>Site Description: <?php echo $site_info['description']; ?></p>

    <section class="projects mt-4">
        <h2>Projects</h2>
        <?php
        $projects = [
            ['title' => 'Project 1', 'description' => 'Description of project 1', 'link' => 'https://example.com/project1'],
            ['title' => 'Project 2', 'description' => 'Description of project 2', 'link' => 'https://example.com/project2'],
            ['title' => 'Project 3', 'description' => 'Description of project 3', 'link' => 'https://example.com/project3'],
        ];
        
        foreach ($projects as $project) {
            echo "<div class='project mb-3'>
                    <h3>{$project['title']}</h3>
                    <p>{$project['description']}</p>
                    <a href='{$project['link']}' class='btn btn-primary'>View Project</a>
                  </div>";
        }
        ?>
    </section>

    <section class="photos mt-4">
    <h2>Photos</h2>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://via.placeholder.com/800x400?text=Photo+1" class="d-block w-100" alt="Photo 1">
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/800x400?text=Photo+2" class="d-block w-100" alt="Photo 2">
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/800x400?text=Photo+3" class="d-block w-100" alt="Photo 3">
            </div>
        </div>
        <div class="mt-3">
            <a href="#" class="btn btn-primary">View More Photos</a>
        </div>
    </div>
</section>
<section class="skills mt-4">
    <h2>Skills</h2>
    <?php
    $skills = [
        'PHP',
        'HTML',
        'CSS',
        'JavaScript',
        'MySQL',
        'React',
        'Node.js',
        'Git',
        'AWS',
        'Python',
        'Java',
        'C#',
        'Databases',
    ];

    foreach ($skills as $skill) {
        echo "<div class='skill mb-3'>$skill</div>";
    }
    ?>
</section>

</div>

<?php 
include 'footer.php'; 
?> 