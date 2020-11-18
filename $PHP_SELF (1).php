    <?php
if (isset($_POST['BTEnvia'])) {
 
 //Variaveis de POST, Alterar somente se necessário 
 //====================================================
 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $telefone = $_POST['telefone']; 
 $assunto = $_POST['assunto'];
 $mensagem = $_POST['mensagem'];
 //====================================================
 
 //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
 //==================================================== 
 $email_remetente = "contato@seudominio.com"; // deve ser uma conta de email do seu dominio 
 //====================================================
 
 //Configurações do email, ajustar conforme necessidade
 //==================================================== 
 $email_destinatario = "emailDeDestino@gmail.com"; // pode ser qualquer email que receberá as mensagens
 $email_reply = "$email"; 
 $email_assunto = "formulario de contato em portoflexconexoes.com "; // Este será o assunto da mensagem
 //====================================================
 
 //Monta o Corpo da Mensagem adicione quantas quiser adicione quantas quiser
 //So lembre de adicionar a variavel corespondente no inicio do arquivo
 //====================================================
 $email_conteudo = "Nome = $nome \n"; 
 $email_conteudo .= "Email = $email \n";
 $email_conteudo .= "Telefone = $telefone \n"; 
  $email_conteudo .= "assunto = $assunto \n"; 
 $email_conteudo .= "Mensagem = $mensagem \n"; 
 //====================================================
 
 //Seta os Headers (Alterar somente caso necessario) 
 //==================================================== 
 $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
 //====================================================
 
 //Enviando o email 
 //==================================================== 
 if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
 echo $_POST['msg'] = "<h1>E-Mail enviado com sucesso!</h1>";
 } 
 else{ 
 echo "<script>function alerta() { alert('E-Mail enviado com sucesso!'); retornar();}function retornar() {window.location.href = 'https://portoflexconexoes.com/#/faleconosco'}</script>"; } 
 //====================================================
} 
?>
