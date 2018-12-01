<?php
$data=array();
$q=mysql_query("select DISTINCT "Имя поля" from "Имя таблицы"");
while($r=mssql_fetch_assoc($q))
{
    $data[]=array($r['name'],$r['h'],$r['w'],$r['info']);
}
?>
<!DOCTYPE html>
<head>
<script src="https://api-maps.yandex.ru/2.1/?apikey=2c478182-7b12-46cb-88e8-18bafea654b7&lang=ru_RU" type="text/javascript">
    </script>
</head>
<body>
    <script>


        var array=<?php echo json_encode($data) ?>;
        if(array.Length>0)
        {
        ymaps.ready(function(){ 
            var myMap = new ymaps.Map("map", {
                center: [array[0].w, array[0].h],
                zoom: 7
            }); 
        });
        }
        else{
            ymaps.ready(function()
            {
            var myMap = new ymaps.Map("map", {
                center: [51.4, 39.1],
                zoom: 7
            }); 
        }
        }
for(i=0;i<array.Length;i++)
{
    ymaps.ready(function()
    {
        var myPlacemark=new ymaps.GetObject(
        {
            geometry:{
                type:"Point",
                coordinates:[array[i].w,array[i].h],
                balloonContent: array[i].info
            }
        }
        myMap.geoObjects.Add(myPlacemark);
    );
    });
 
}
        </script>
    
</body>
