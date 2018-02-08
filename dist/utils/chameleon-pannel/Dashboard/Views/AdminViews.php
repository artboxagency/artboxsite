<?php require_once "../Controllers/AdminController.php"; ?>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 ?>
<div id="item-container">
    <div class="newposts">
        <h3>News</h3>
        <table class="table table-hover">
              <thead>
                    <tr>
                      <?php foreach ($newsLabel as $key => $label) { ?>
                          <th><?= $label ?></th>
                      <?php } ?>
                    </tr>
              </thead>
              <tbody>
                  <?php foreach ($news as $key => $singleNews) { ?>
                      <tr>
                          <td class="id"><?= $singleNews["id"]?></td>
                          <td class="title" ><?= str_replace("%%","'",$singleNews["title"]) ?></td>
                          <td class="header" style="width:250px;"><?= substr($singleNews["header"], 0, 55); ?>...</td>
                          <td class="paragraphes"  style="width:250px;"><?= substr($singleNews["paragraphes"], 0, 55); ?>...</td>
                          <td class="imgsrc"><img width="100" height="100"src="<?= $singleNews["imgsrc"] ?>"></td>
                          <td class="date"><?= $singleNews["date"]?></td>
                          <td class="author"><?= $singleNews["author"]?></td>
                          <td class="actions">
                              <div class="actions-edit">
                                  <button type="button" class="btn btn-default">Edit</button>
                                  <button type="button" class="btn btn-danger">Delete</button>
                              </div>
                          </td>
                      </tr>
                  <?php } ?>
              </tbody>

    </div>

    <div class="clients">

        <table class="table table-hover">
            <h3>Clients</h3>
              <thead>
                    <tr>
                      <?php foreach ($clientsLabel as $key => $label) { ?>
                          <th><?= $label ?></th>
                      <?php } ?>
                    </tr>
              </thead>
              <tbody>
                  <?php foreach ($clients as $key => $singleClient) { ?>
                      <tr>
                          <td class="id"><?= $singleClient["id"]?></td>
                          <td class="name"><?= $singleClient["name"]?></td>

                          <td class="external-url" ><?= str_replace("%%","'",$singleClient["externalUrl"]) ?></td>
                          <td class="imgsrc"><img width="100" height="100"src="<?= $singleClient["imgSource"] ?>"></td>
                          <td class="actions">
                              <div class="actions-edit">
                                  <button type="button" class="btn btn-default">Edit</button>
                                  <button type="button" class="btn btn-danger">Delete</button>
                              </div>
                          </td>
                      </tr>
                  <?php } ?>
              </tbody>
    </div>

    <div class="team">

    </div>

    <div class="projects">

    </div>

</div>
