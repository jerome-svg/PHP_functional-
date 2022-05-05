<?php





    $people_data = [
        [
            'name' => 'Jerome Valdez',
            'age' => 25,
            'gender' => 'male',
            'height' => 60
        ], 
        [
            'name' => 'Phol Andrew',
            'age' => 28,
            'gender' => 'male',
            'height' => 50
        ],
        [
            'name' => 'Jenny Jamely',
            'age' => 25,
            'gender' => 'Female',
            'height' => 70
        ]

    ];

    $width_fistName_and_lastName = function($person){
        return array_merge(
            $person, 
            [
                'first_name' => explode(' ', $person['name'])[0],
                'last_name' => explode(' ', $person['name'])[1]
            ]
        );
    };

    $height_inches_to_meters = function($person){
        return array_merge(
            $person, 
            [
                'height' => $person['height'] * 0.0254
            ]
        );
    };


    $add_initial = function($person){
        return array_merge(
            $person, 
            [
               
                'initials' => $person['first_name'][0] . $person['last_name'][0]
            ]
        );
    };


    $compos = function(...$funcs){
        return function($data) use ($funcs){
            return array_reduce(
                $funcs,
                fn($carry, $func) => $func($carry),
                $data
            );
        };
    };



    $formatted_person = $compos(
        $width_fistName_and_lastName, 
        $height_inches_to_meters, 
        $add_initial
    );

    $formatted_people = array_map($formatted_person, $people_data); 

    echo "<pre>";
    print_r($formatted_people);
    echo "</pre>";

?>