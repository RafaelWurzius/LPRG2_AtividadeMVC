<main>
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2" style="margin-top:100px">

        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Tarefa</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['tarefa'] as $tarefa) { ?>
            <tr>
              <td><?= $tarefa['id'] ?></td>
              <td><?= $tarefa['tarefa'] ?></td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>
