<!-- PHP PARA FORMULÁRIO EM ANDAMENTO -->

<!-- <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    $to = 'seuemail@exemplo.com'; // Substitua com seu email
    $subject = 'Contato do Formulário de Currículo';
    $body = "Nome: $nome\nEmail: $email\nMensagem:\n$mensagem";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha ao enviar mensagem. Tente novamente mais tarde.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>  

Como usar
Crie um arquivo chamado curriculo.html e copie e cole o código HTML nele.
Crie um arquivo chamado styles.css e copie e cole o código CSS nele.
Crie um arquivo chamado submit_form.php e copie e cole o código PHP nele.
Certifique-se de que o arquivo curriculo.pdf está na mesma pasta que os arquivos HTML e CSS.
Hospede esses arquivos em um servidor que suporte PHP (como um servidor web Apache com PHP configurado).

-->