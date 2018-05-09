
$(document).ready(function(){

    $('#bar-chart').insertFusionCharts({
        type: 'column2d',
        width: "100%",
        hight: "400",
        dataFormat: "json",
        dataSource: {
            "chart":{
                "caption": "จำนวนเรือประมงแบ่งตามประเทศ",
                "xAxisName": "ประเทศ",
                "yAxisName": "จำนวน/ลำ",
                "theme": "fint"
            },
            "data":[
                {
                "label": "ประเทศไทย",
                "value": "120"
                },
                {
                "label": "บรูไน",
                "value": "230",    
                },
                {
                "label": "กัมพูชา",
                "value": "400"
                }
            ]
        }
    });

});