<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Tabela de Preços</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="container mt-5">
  <h1>Tabela de Preços</h1>
    <table class="table">
      <thead>
        <tr>
          <th>De</th>
          <th>Até</th>
          <th>Valor da Mensalidade</th>
          <th></th>
        </tr>
      </thead>
      <tbody id="tabela">
        <tr>
          <td><input type="text" class="form-control valor" name="de[]" value="0"></td>
          <td><input type="text" class="form-control valor" name="ate[]" value="5.000,00"></td>
          <td><input type="text" class="form-control valor" name="valor[]" value="50,00"></td>
          <td><button type="button" class="btn btn-danger btn-sm remover-linha">Remover</button></td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="4">
            <button type="button" class="btn btn-success btn-sm adicionar-linha">Adicionar Linha</button>
          </td>
        </tr>
      </tfoot>
    </table>
  </div>
  <script>
    $(document).ready(function() {
      // Adiciona nova linha na tabela
      $(".adicionar-linha").click(function() {
        var linha = '<tr>' +
                      '<td><input type="text" class="form-control valor" name="de[]" value=""></td>' +
                      '<td><input type="text" class="form-control valor" name="ate[]" value=""></td>' +
                      '<td><input type="text" class="form-control valor" name="valor[]" value=""></td>' +
                      '<td><button type="button" class="btn btn-danger btn-sm remover-linha">Remover</button></td>' +
                    '</tr>';
        $("#tabela").append(linha);
      });
      
      // Remove linha da tabela
      $("body").on("click", ".remover-linha", function() {
        $(this).closest("tr").remove();
      });

      // Aplica a máscara nos campos de valor
      $(".valor").maskMoney({
        prefix: '',
        allowNegative: false,
        thousands: '.',
        decimal: ','
      });
    });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
</body>
</html>
