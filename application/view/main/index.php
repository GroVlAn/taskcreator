<script src='tablesort.number.js'></script>
<script src='tablesort.date.js'></script>

<div class="table-responsive">
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
                                    <th><input type="text" class="form-control" value="<?= $item['name'] ?>"
                                               name="taskName"></th>
                                    <th><input type="text" class="form-control" value="<?= $item['email'] ?>"
                                               name="taskEmail"></th>
                                    <th><textarea class="form-control" name="taskText"><?= $item['text'] ?></textarea>
                                    </th>
                                    <input type="hidden" value="<?= $key + 1 ?>" name="id">
                                    <th><input type="submit" class="btn btn-secondary" name="submit"></th>
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
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
                <h3 class="h3">Добавить Задачу</h3>
                <table>
                    <form method="post" action="/main/add" name="taskformadd">
                        <tr>

                            <th><input type="text" class="form-control" value="" name="taskName"
                                       style="margin-bottom: 111px" placeholder="Name"></th>
                            <th><input type="text" class="form-control" value="" name="taskEmail"
                                       style="margin-bottom: 111px" placeholder="Email"></th>
                            <th><textarea name="taskText" class="form-control" style="width: 300px; height: 150px"
                                          placeholder="Text Task"></textarea></th>

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
</div>

<script src='/js/tablesort.js'></script>
<script src='/js/sorts/tablesort.dotsep.js'></script>
<script src='/js/sorts/tablesort.filesize.js'></script>
<script src='/js/sorts/tablesort.date.js'></script>
<script src='/js/sorts/tablesort.number.js'></script>
<script src='/js/sorts/tablesort.monthname.js'></script>
<script>
    table = document.getElementById('mytable');
    new Tablesort(table);
    var refresh = new Tablesort(tableRefresh);

    var rowCount = tableRefresh.rows.length;
    var row = tableRefresh.insertRow(rowCount);
    var cellName = row.insertCell(0);
    cellName.innerHTML = 0;

    refresh.refresh();
</script>

