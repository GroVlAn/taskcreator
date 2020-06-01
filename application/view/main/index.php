<div class="container">
    <div class="row">
        <div class="col">
            <table class="table tablesorter" id="mytable">
                <tread>
                    <tr>
                        <th id='sort1' scope="col">№</th>
                        <th scope="col" onclick="sort_name();">Имя</th>
                        <th scope="col" onclick="sort_name();">Email</th>
                        <th scope="col" onclick="sort_name();">Текс задачи</th>
                        <? if ($_SESSION['user']['namegrope'] == 'Админ'): ?>
                            <th scope="col" onclick="sort_name();">Отправить</th>
                        <? endif; ?>
                    </tr>
                </tread>
                <tbody id="table1">
                <? if ($_SESSION['user']['namegrope'] == 'Админ'): ?>
                    <? foreach ($result as $key => $item): ?>
                        <form method="post" action="/main/update" name="taskform<?= $key ?>">
                            <tr>
                                <th data-name="sort1" scope="col"><?= $key ?></th>
                                <th><input type="text" value="<?= $item['name'] ?>" name="taskName"></th>
                                <th><input type="text" value="<?= $item['email'] ?>" name="taskEmail"></th>
                                <th><textarea name="taskText"><?= $item['text'] ?></textarea></th>
                                <input type="hidden" value="<?= $key + 1 ?>" name="id">
                                <th><input type="submit" name="submit"></th>
                            </tr>
                        </form>
                    <? endforeach; ?>
                <? else: ?>
                    <? foreach ($result as $key => $item): ?>
                        <tr>
                            <th data-name="sort1" scope="col"><?= $key ?></th>
                            <th><?= $item['name'] ?></th>
                            <th><?= $item['email'] ?></th>
                            <th><?= $item['text'] ?></th>
                        </tr>
                    <? endforeach; ?>
                <? endif; ?>

                </tbody>
            </table>
            <h3 class="h3">Добавить Задачу</h3>
            <table>
                <form method="post" action="/main/add" name="taskformadd">
                    <tr>

                        <th><input type="text" class="form-control" value="" name="taskName" style="margin-bottom: 111px" placeholder="Name"></th>
                        <th><input type="text" class="form-control" value="" name="taskEmail" style="margin-bottom: 111px" placeholder="Email"></th>
                        <th><textarea name="taskText" class="form-control" style="width: 300px; height: 150px" placeholder="Text Task"></textarea></th>

                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th><input class="btn btn-secondary" type="submit" style=" margin-left: 192px;"></th>
                    </tr>
                </form>
            </table>
        </div>
    </div>
</div>

<script>
    function sort_name() {
        var table = $('#mytable');
        var tbody = $('#table1');

        tbody.find('tr').sort(function (a, b) {
            if ($('#name_order').val() == 'asc') {
                return $('td:first', a).text().localeCompare($('td:first', b).text());
            } else {
                return $('td:first', b).text().localeCompare($('td:first', a).text());
            }

        }).appendTo(tbody);

        var sort_order = $('#name_order').val();
        if (sort_order == "asc") {
            document.getElementById("name_order").value = "desc";
        }
        if (sort_order == "desc") {
            document.getElementById("name_order").value = "asc";
        }
    }

    function sort_age() {
        var table = $('#mytable');
        var tbody = $('#table1');

        tbody.find('tr').sort(function (a, b) {
            if ($('#age_order').val() == 'asc') {
                return $('td:last', a).text().localeCompare($('td:last', b).text());
            } else {
                return $('td:last', b).text().localeCompare($('td:last', a).text());
            }

        }).appendTo(tbody);

        var sort_order = $('#age_order').val();
        if (sort_order == "asc") {
            document.getElementById("age_order").value = "desc";
        }
        if (sort_order == "desc") {
            document.getElementById("age_order").value = "asc";
        }
    }
</script>