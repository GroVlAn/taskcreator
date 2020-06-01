<div class="container">
    <div class="row">
        <div class="col">
            <table class="table tablesorter" id="mytable" >
                <tread>
                    <tr>
                        <th id ='sort1' scope="col">№</th>
                        <th scope="col" onclick="sort_name();" >Имя</th>
                        <th scope="col" onclick="sort_name();">Email</th>
                        <th scope="col" onclick="sort_name();">Текс задачи</th>
                    </tr>
                </tread>
                <tbody id="table1">
                <?foreach ($result as $key => $item):?>
                <tr>
                    <th data-name="sort1" data-value="<?=$key?>" scope="col"><?=$key?></th>
                    <th data-name="sort2" data-value="<?=$item['name']?>"><?=$item['name']?></th>
                    <th data-name="sort3" data-value="<?=$item['email']?>"><?=$item['email']?></th>
                    <th data-name="sort4" data-value="<?=$item['text']?>"><?=$item['text']?></th>
                </tr>
                <?endforeach;?>
                </tbody>
            </table>
            <input type="hidden" id="name_order" value="asc">
        </div>
    </div>
</div>

<script>
    function sort_name()
    {
        var table=$('#mytable');
        var tbody =$('#table1');

        tbody.find('tr').sort(function(a, b)
        {
            if($('#name_order').val()=='asc')
            {
                return $('td:first', a).text().localeCompare($('td:first', b).text());
            }
            else
            {
                return $('td:first', b).text().localeCompare($('td:first', a).text());
            }

        }).appendTo(tbody);

        var sort_order=$('#name_order').val();
        if(sort_order=="asc")
        {
            document.getElementById("name_order").value="desc";
        }
        if(sort_order=="desc")
        {
            document.getElementById("name_order").value="asc";
        }
    }

    function sort_age()
    {
        var table=$('#mytable');
        var tbody =$('#table1');

        tbody.find('tr').sort(function(a, b)
        {
            if($('#age_order').val()=='asc')
            {
                return $('td:last', a).text().localeCompare($('td:last', b).text());
            }
            else
            {
                return $('td:last', b).text().localeCompare($('td:last', a).text());
            }

        }).appendTo(tbody);

        var sort_order=$('#age_order').val();
        if(sort_order=="asc")
        {
            document.getElementById("age_order").value="desc";
        }
        if(sort_order=="desc")
        {
            document.getElementById("age_order").value="asc";
        }
    }
</script>