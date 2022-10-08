<?php

$province =  $_POST['province'];

$city['manila'] = ['Quiapo', 'Intramuros', 'Santa Cruz (South)', 'Malate', 'San Miguel', 'Binondo', 'Paco', 'Sampaloc (East)',
                     'Santa Ana', 'San Nicolas', 'Pandacan', 'Tondo (South)', 'Tondo (North)', 'Santa Cruz (North)', 'Sampaloc (West)', 'Santa Mesa',
                     'San Andres','Port Area (South)'];

$city['laguna'] = ['San Pablo', 'Alaminos', 'Nagcarlan', 'Rizal', 'Liliw', 'Majayjay', 'Magdalena', 'Pagsanjan', 
                     'Santa Cruz', 'Pila', 'Victoria', 'Calauan', 'Cavinti', 'Lumban', 'Kalayaan', 'Paete', 
                     'Pakil', 'Pangil', 'Siniloan', 'Mabitac', 'Famy', 'Santa Maria', 'San Pedro', 'Biñan', 
                     'Cabuyao', 'Santa Rosa', 'Calamba', 'Canlubang', 'Calamba', 'Camp Vicente Lim', 'Calamba', 'Los Baños', 
                     'Luisiana', 'Bay'];

$city['cavite'] = ['Cavite City', 'Bacoor', 'Imus', 'Kawit', 'Noveleta', 'Rosario', 'General Trias', 
                     'Tanza', 'Trece Martires', 'Naic', 'Ternate', 'Maragondon', 'Magallanes', 'Dasmariñas', 'Carmona', 
                     'General Mariano Alvarez', 'Silang', 'Amadeo', 'Tagaytay', 'Mendez (Mendez-Nuñez)', 'Indang', 'Alfonso', 'General Emilio Aguinaldo (Bailen)'];

echo json_encode($city[$province]);