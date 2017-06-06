var myApp = angular.module('myApp', []);

myApp.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('//');
    $interpolateProvider.endSymbol('//');
  });


myApp.controller('SelectPais', ['$scope', function($scope) {
 
   $scope.paises = [
        {value:1,label : 'Argentina'},
        {value:2,label : 'Colombia'} ,  
        {value:3,label : 'Ecuador'},
        {value:4,label : 'España'},
        {value:5,label : 'Peru'},
        {value:6,label : 'Bolivia'},
        {value:7,label : 'Uruguay'},
        {value:8,label : 'Mexico'},
        {value:9,label : 'Venezuela'},
        {value:10,label : 'Chile'},
        {value:11,label : 'Honduras'}        
    ];
    
    $scope.argentina = [            
        {value:'34',label : 'Buenos Aires'},
        {value:'35',label : 'Capital Federal'},
        {value:'36',label : 'Catamarca'},
        {value:'37',label : 'Córdoba'}, 
        {value:'38',label : 'Corrientes'},
        {value:'39',label : 'Chaco'}, 
        {value:'40',label : 'Chubut'},
        {value:'41',label : 'Entre Ríos'}, 
        {value:'42',label : 'Formosa'},
        {value:'43',label : 'Jujuy'}, 
        {value:'44',label : 'La Pampa'},
        {value:'45',label : 'La Rioja'}, 
        {value:'46',label : 'Mendoza'},
        {value:'47',label : 'Misiones'}, 
        {value:'48',label : 'Neuquén'},
        {value:'49',label : 'Río Negro'},
        {value:'50',label : 'Salta'}, 
        {value:'51',label : 'San Juan'},
        {value:'52',label : 'San Luis'}, 
        {value:'53',label : 'Santa Cruz'},
        {value:'54',label : 'Santa Fe'},
        {value:'55',label : 'Santiago del Estero'}, 
        {value:'56',label : 'Tierra del Fuego'},
        {value:'57',label : 'Tucumán'} 
    ];
    
   
    $scope.colombia = [
        {region : "Bogota D.C.", value: '1'},
        {region : "Antioquia", value: '2'},
        {region : "Amazonas", value: '3'},
        {region : "Atlántico", value: '4'},
        {region : "Bolívar", value: '5'},
        {region : "Boyacá", value: '6'},        
        {region : "Caldas", value: '7'},
        {region : "Caquetá", value: '8'},
        {region : "Cauca", value: '9'},
        {region : "Cesar", value: '10'},
        {region : "Córdoba", value: '11'},
        {region : "Cundinamarca", value: '12'},        
        {region : "Chocó", value: '13'},
        {region : "Huila", value: '14'},
        {region : "Guajira", value: '15'},
        {region : "Magdalena", value: '16'},
        {region : "Meta", value: '17'} ,
        {region : "Nariño", value: '18'},        
        {region : "Norte de Santander", value: '19'},
        {region : "Quindio", value: '20'},
        {region : "Risaralda", value: '21'},
        {region : "Santander", value: '22'},
        {region : "Sucre", value: '23'},
        {region : "Tolima", value: '24'},
        {region : "Valle del Cauca", value: '25'},        
        {region : "Arauca", value: '26'},
        {region : "Casanare", value: '27'},
        {region : "Putumayo", value: '28'},
        {region : "San Andrés y Providencia", value: '29'},
        {region : "Guainía", value: '30'} ,
        {region : "Guaviare", value: '31'},        
        {region : "Vaupés", value: '32'},
        {region : "Vichada", value: '33'}        
    ];      
    
    $scope.ecuador = [            
       {value:'58',label : 'Azuay'},
       {value:'59',label : 'Bolívar'},
     {value:'60',label : 'Cañar'},
        {value:'61',label : 'Carchi'},
        {value:'62',label : 'Chimborazo'},
        {value:'63',label : 'Cotopaxi'},
         {value:'64',label : 'El Oro'},
         {value:'65',label : 'Esmeraldas'},
         {value:'66',label : 'Galápagos'},
        {value:'67',label : 'Guayas'},
        {value:'68',label : 'Imbabura'},
        {value:'69',label : 'Loja'},
         {value:'70',label : 'Los Ríos'},
         {value:'71',label : 'Manabí'},
         {value:'72',label : 'Morona-Santiago'},
        {value:'73',label : 'Napo'},
        {value:'74',label : 'Orellana'},
        {value:'75',label : 'Pastaza'},
        {value:'76',label : 'Pichincha'},
         {value:'77',label : 'Sucumbíos'},
         {value:'78',label : 'Tungurahua'},
         {value:'79',label : 'Zamora-Chinchipe'},
        {value:'80',label : 'Santa Elena'},
        {value:'81',label : 'Santo Domingo'}
    ];
    
      $scope.espana = [            
       {value:'0',label : 'Todas las Regiones'}         
    ];
    
      $scope.peru = [            
     {value:'82',label : 'Lima'},
     {value:'83',label : 'Amazonas'},
     {value:'84',label : 'Ancash'},
     {value:'85',label : 'Apurimac'},
     {value:'86',label : 'Arequipa'},
     {value:'87',label : 'Ayacucho'},
     {value:'88',label : 'Cajamarca'},
     {value:'89',label : 'Callao'},
     {value:'90',label : 'Cusco'},
     {value:'91',label : 'Huancavelica'},
     {value:'92',label : 'Huanuco'},
     {value:'93',label : 'Ica'},
     {value:'94',label : 'Junin'},
     {value:'95',label : 'Lambayeque'},
     {value:'96',label : 'La libertad'},
     {value:'97',label : 'Loreto'},
     {value:'98',label : 'Madre de Dios'},
     {value:'99',label : 'Moquegua'},
     {value:'100',label : 'Pasco'},
     {value:'101',label : 'Piura'},
     {value:'102',label : 'Puno'},
     {value:'103',label : 'San Martin'},
     {value:'104',label : 'Tacna'},
     {value:'105',label : 'Tumbes'},
     {value:'106',label : 'Ucayali'} 
    ];
    
      $scope.bolivia = [            
       {value:'0',label : 'Todas las Regiones'}         
    ];
    
      $scope.uruguay = [            
        {value:'0',label : 'Todas las Regiones'}        
    ];
    
      $scope.mexico = [
     {value:'107',label : 'Distrito Federal'},
     {value:'108',label : 'Aguascalientes'},
     {value:'109',label : 'Baja California'},
     {value:'110',label : 'Campeche'},
     {value:'111',label : 'Coahuila'},
     {value:'112',label : 'Colima'},
     {value:'113',label : 'Chiapas'},
     {value:'114',label : 'Chihuahua'},
     {value:'115',label : 'Durango'},
     {value:'116',label : 'Guanajuato'},
     {value:'117',label : 'Guerrero'},
     {value:'118',label : 'Hidalgo'},
     {value:'119',label : 'Jalisco'},
     {value:'120',label : 'Estado de México'},
     {value:'121',label : 'Michoacán'},
     {value:'122',label : 'Morelos'},
     {value:'123',label : 'Nayarit'},
     {value:'124',label : 'Nuevo León'},
     {value:'125',label : 'Oaxaca'},
     {value:'126',label : 'Puebla'},
     {value:'127',label : 'Querétaro'},
     {value:'128',label : 'Quintana Roo'},
     {value:'129',label : 'San Luis Potosí'},
     {value:'130',label : 'Sinaloa'},
     {value:'131',label : 'Sonora'},
     {value:'132',label : 'Tabasco'},
     {value:'133',label : 'Tamaulipas'},
     {value:'134',label : 'Tlaxcala'},
     {value:'135',label : 'Veracruz'},
     {value:'136',label : 'Yucatán'},
     {value:'137',label : 'Zacatecas'}
    ];
    
      $scope.venezuela = [            
         {value:'0',label : 'Todas las Regiones'}        
    ];
    
      $scope.chile = [            
        {value:'0',label : 'Todas las Regiones'}       
    ];
    
      $scope.honduras = [            
        {value:'0',label : 'Todas las Regiones'}           
    ];
      
}]);
