<?php

$resume =
[
    'basic_info' =>
    [
        'name' => 'Faruk Ahmed Sojol',
        'address' => 'Savar, Dhaka, Bangladesh',
        'email' => 'faruk.cse.bd@gmail.com',
        'cell' => '01632958369'
    ],

    'image'   => 'images/picture.jpeg',

    'career_objective' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',

    'present_status' => 'I\'m looking for a job opportunity..',

    'education' =>
    [
        'degree_name' =>
        [
            'Name',
            'Institute',
            'Board',
            'passing_year',
            'group',
            'result'
        ],

        'BSC' =>
        [
            'B.Sc.',
            'City University',
            'Bangladesh',
            '2022',
            'CSE',
            '3.00'
        ],
        'HSC' =>
        [
            'HSC',
            'SLC',
            'Dhaka',
            '2018',
            'Science',
            '3.00'
        ],
        'SSC' =>
        [
            'SSC',
            'RCMS',
            'Dhaka',
            '2016',
            'Science',
            '3.00'
        ],
    ],

    'computer_skills' =>
    [
        'computer_skills_name' =>
        [
            'Programming Languages',
            'Web based skills',
            'Database skills',
            'Scripting skills',
            'Development Tools',
            'Others'
        ],

        'programming' => 'PHP, C, Java',
        'web' => 'HTML, CSS, JS, Laravel',
        'database' => 'MySQL',
        'scripting' => 'PHP',
        'development' => 'VS Code, PhpStorm, XAMPP',
        'others' => 'MS Office'

    ],

    'projects' =>
    [
        'name' => 'Marriage & Divorce Registry Management System',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
    ],
    'academic_projects' =>
    [
        'name1' => 'Pharmacy Management System',
        'description1' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        
        'name2' => 'Blood Bank Management System',
        'description2' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
    ],

    'achievements' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',

    'languages' =>
    [
        'name1' => 'English',
        'name2' => 'Bangla',
    ],

    'personal_information' =>
    [
        'info' =>
        [
            'Full Name',
            'Father\'s Name',
            'Mother\'s Name',
            'Date of Birth',
            'Sex',
            'Marital Status',
            'Nationality',
            'Religion',
            'Blood Group',
            'Present Address',
            'Permanent Address'
        ],
        'full_name' => 'Faruk Ahmed Sojol',
        'father_name' => 'ABC',
        'mother_name' => 'DEF',
        'date_of_birth' => '25/06/1990',
        'sex'=> 'Male',
        'marital_status' => 'Unmarried',
        'nationality' => 'Bangladeshi',
        'religion' => 'Islam',
        'blood_group' => 'AB+',
        'present_address' => '	Savar, Dhaka',
        'permanent_address' => 'Munshiganj'

    ],

    'hobbies' => 
        [
            'name1' => 'Reading',
            'name2' => 'Solving Puzzle
            ',
        ],
    'games' => 
        [
            'name1' => 'Football',
            'name2' => 'Cricket',
            'name3' => 'Badminton',
        ],

    'references' =>
    [
        'references_1' =>
        [
           'name' => 'Tahsin Abrar',
           'designation' => 'Lead Engineer',
           'company' =>'Brain Station 23',
           'address' =>'Dhaka, Bangladesh',
           'email' =>'tahsinabrar@gmail.com',
           'cell' =>'01712345678'
        ],
    ],

];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="style.css">
    <style>
        
    </style>
</head>
<body>
    <div class="content">
            
        <div class="first_section">
            <div class="left">
                <div class="left">
                    <p><b><?php echo $resume['basic_info']['name']?></b><br>
                    <?php echo $resume['basic_info']['address']?><br><?php echo $resume['basic_info']['email']?><br><?php echo $resume['basic_info']['cell']?></p>
                </div>
                <div class="right">
                    <img src="<?php echo $resume['image']?>" height="150px" width="200px" alt="">
                </div>
            </div>
        </div>

        <div class="career">
        <p class="underline"><b>Career Objective</b></p>
        <p><?php echo $resume['career_objective']?></p>
        </div>
        <div class="present_status">
            <p class="underline"><b>Present Status</b></p>
            <p><?php echo $resume['present_status']?></p>
        </div>
        <div class="education">
            <p class="underline"><b>Educational Qualification</b></p>
            <table border="1px" class="edu_table_content">
                <tr>
                    <th><?php echo $resume['education']['degree_name']['0']?></th>
                    <th><?php echo $resume['education']['degree_name']['1']?></th>
                    <th><?php echo $resume['education']['degree_name']['2']?></th>
                    <th><?php echo $resume['education']['degree_name']['3']?></th>
                    <th><?php echo $resume['education']['degree_name']['4']?></th>
                    <th><?php echo $resume['education']['degree_name']['5']?></th>
                  
                </tr>
                <tr>
                    <td><?php echo $resume['education']['BSC']['0']?></td>
                    <td><?php echo $resume['education']['BSC']['1']?></td>
                    <td><?php echo $resume['education']['BSC']['2']?></td>
                    <td><?php echo $resume['education']['BSC']['3']?></td>
                    <td><?php echo $resume['education']['BSC']['4']?></td>
                    <td><?php echo $resume['education']['BSC']['5']?></td>
                   
                </tr>
                <tr>
                    <td><?php echo $resume['education']['HSC']['0']?></td>
                    <td><?php echo $resume['education']['HSC']['1']?></td>
                    <td><?php echo $resume['education']['HSC']['2']?></td>
                    <td><?php echo $resume['education']['HSC']['3']?></td>
                    <td><?php echo $resume['education']['HSC']['4']?></td>
                    <td><?php echo $resume['education']['HSC']['5']?></td>
                   
                </tr>
                <tr>
                    <td><?php echo $resume['education']['SSC']['0']?></td>
                    <td><?php echo $resume['education']['SSC']['1']?></td>
                    <td><?php echo $resume['education']['SSC']['2']?></td>
                    <td><?php echo $resume['education']['SSC']['3']?></td>
                    <td><?php echo $resume['education']['SSC']['4']?></td>
                    <td><?php echo $resume['education']['SSC']['5']?></td>
                   
                </tr>
            </table>
        </div>
        <div class="computer_skills">
            <p class="underline"><b>Computer Skills</b></p>
            <table>
                <tr>
                    <td><?php echo $resume['computer_skills']['computer_skills_name']['0']?></td>
                    <td>:</td>
                    <td><td><?php echo $resume['computer_skills']['programming']?></td></td>
                </tr>
                <tr>
                    <td><?php echo $resume['computer_skills']['computer_skills_name']['1']?></td>
                    <td>:</td>
                    <td><td><?php echo $resume['computer_skills']['web']?></td></td>
                </tr>
                <tr>
                    <td><?php echo $resume['computer_skills']['computer_skills_name']['2']?></td>
                    <td>:</td>
                    <td><td><?php echo $resume['computer_skills']['database']?></td></td>
                </tr>
                <tr>
                    <td><?php echo $resume['computer_skills']['computer_skills_name']['3']?></td>
                    <td>:</td>
                    <td><td><?php echo $resume['computer_skills']['scripting']?></td></td>
                </tr>
                <tr>
                    <td><?php echo $resume['computer_skills']['computer_skills_name']['4']?></td>
                    <td>:</td>
                    <td><td><?php echo $resume['computer_skills']['development']?></td></td>
                </tr>
                <tr>
                    <td><?php echo $resume['computer_skills']['computer_skills_name']['5']?></td>
                    <td>:</td>
                    <td><td><?php echo $resume['computer_skills']['others']?></td></td>
                </tr>
               
            </table>
            
        </div>
        <div class="projects">
            <p class="underline"><b>Projects</b></p>
            <ul type="bold">
                <li><b><?php echo $resume['projects']['name']?></b></li>
                <p><?php echo $resume['projects']['description']?></p>
            </ul>
        </div>
        <div class="academic_projects">
            <p class="underline"><b>Academic Projects</b></p>
            <ul type="disc">
                <li><b><?php echo $resume['academic_projects']['name1']?></b></li>
                    <ul type="circle">
                        <li><p><?php echo $resume['academic_projects']['description1']?></p>
                        </li>    
                    </ul>
                </ul>
            <ul type="disc">
            <li><b><?php echo $resume['academic_projects']['name1']?></b></li>
                    <ul type="circle">
                        <li><p><?php echo $resume['academic_projects']['description1']?></p>
                        </li>    
                    </ul>    
            </ul>
        </div>
        <div class="achievements">
            <p class="underline"><b>Achievements</b></p>
            <ul type="square">
                <li><?php echo $resume['achievements']?></li>
            </ul>
        </div>
        <div class="language">
            <p class="underline"><b>Language</b></p>
            <ul type="square">
                <li><?php echo $resume['languages']['name1']?></li>
                <li><?php echo $resume['languages']['name2']?></li>
            </ul>
        </div>
        <div class="personal">
            <p class="underline"><b>Personal Information</b></p>
            <table style="margin-left: 20%">
                <tr>
                    <td><?php echo $resume['personal_information']['info']['0']?></td>
                    <td>:</td>
                    <td><?php echo $resume['personal_information']['full_name']?></td>
                </tr>
                <tr>
                    <td><?php echo $resume['personal_information']['info']['1']?></td>
                    <td>:</td>
                    <td><?php echo $resume['personal_information']['father_name']?></td>
                </tr>
                <tr>
                    <td><?php echo $resume['personal_information']['info']['2']?></td>
                    <td>:</td>
                    <td><?php echo $resume['personal_information']['mother_name']?></td>
                </tr>
                <tr>
                    <td><?php echo $resume['personal_information']['info']['3']?></td>
                    <td>:</td>
                    <td><?php echo $resume['personal_information']['date_of_birth']?></td>
                </tr>
                <tr>
                    <td><?php echo $resume['personal_information']['info']['4']?></td>
                    <td>:</td>
                    <td><?php echo $resume['personal_information']['sex']?></td>
                </tr>
                <tr>
                    <td><?php echo $resume['personal_information']['info']['5']?></td>
                    <td>:</td>
                    <td><?php echo $resume['personal_information']['marital_status']?></td>
                </tr>
                <tr>
                    <td><?php echo $resume['personal_information']['info']['6']?></td>
                    <td>:</td>
                    <td><?php echo $resume['personal_information']['nationality']?></td>
                </tr>
                <tr>
                    <td><?php echo $resume['personal_information']['info']['7']?></td>
                    <td>:</td>
                    <td><?php echo $resume['personal_information']['religion']?></td>
                </tr>
                <tr>
                    <td><?php echo $resume['personal_information']['info']['8']?></td>
                    <td>:</td>
                    <td><?php echo $resume['personal_information']['blood_group']?></td>
                </tr>
                <tr>
                    <td><?php echo $resume['personal_information']['info']['9']?></td>
                    <td>:</td>
                    <td><?php echo $resume['personal_information']['present_address']?></td>
                </tr>
                <tr>
                    <td><?php echo $resume['personal_information']['info']['10']?></td>
                    <td>:</td>
                    <td><?php echo $resume['personal_information']['permanent_address']?></td>
                </tr>
              
               
            </table>
        </div>


        <div class="hobbies">
            <p class="underline"><b>Hobbies</b></p>
            <ul type="square">
            <li><?php echo $resume['hobbies']['name1']?></li>
            <li><?php echo $resume['hobbies']['name2']?></li>
            </ul>
        </div>
        <div class="games">
            <p class="underline"><b>Games</b></p>
            <ul type="square">
            <li><?php echo $resume['games']['name1']?></li>
            <li><?php echo $resume['games']['name2']?></li>
            <li><?php echo $resume['games']['name3']?></li>
            </ul>
        </div>
        <div class="references">
            <p class="underline"><b>References</b></p>
            <dl>
                <dt><b><?php echo $resume['references']['references_1']['name']?></b></dt>
                <dt><?php echo $resume['references']['references_1']['designation']?></dt>
                <dt><?php echo $resume['references']['references_1']['company']?></dt>
                <dt><?php echo $resume['references']['references_1']['address']?></dt>
                <dt><?php echo $resume['references']['references_1']['email']?></dt>
                <dt><?php echo $resume['references']['references_1']['cell']?></dt>
            </dl>
        </div>
        <div class="footer">
            <p>Copyright &copy; Faruk Ahmed Sojol, 2022</p>
        </div>


    
    </div>

</body>
</html>