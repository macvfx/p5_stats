<div id="p5_stats-tab"></div>
<h2 data-i18n="p5_stats.title"></h2>

<table id="p5_stats-tab-table"></table>

<script>
$(document).on('appReady', function(){
    $.getJSON(appUrl + '/module/p5_stats/get_data/' + serialNumber, function(data){
        var table = $('#p5_stats-tab-table');
        $.each(data, function(key,val){
            var th = $('<th>').text(i18n.t('p5_stats.column.' + key));
            var td = $('<td>').text(val);
            table.append($('<tr>').append(th, td));
        });
    });
});
</script>
