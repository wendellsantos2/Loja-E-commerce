<?php
session_start();
include '../../php/conexao.php';
 if(isset($_POST['entrar'])){  
                    
            
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $sql = mysqli_query($conn,"SELECT idCliente,nomeCliente,emailCliente,senha
             FROM cliente WHERE emailCliente='$email' AND senha='$senha' ");
            
            

            if ( $linha = mysqli_fetch_array( $sql ) ) {
                $emailCli = $linha['emailCliente'];
                $senhaCli = $linha['senha'];
                $nomeCli = $linha['nomeCliente'];
                $idCli = $linha['idCliente'];

                $_SESSION['email'] = $emailCli;
                $_SESSION['senha'] = $senhaCli;
                $_SESSION['nome'] = $nomeCli;
                $_SESSION['id'] = $idCli;
                
                
                echo "<script>
                alert('Bem-vindo $nomeCli')
                location.href='compras.php'
            </script>";

            }
            else{
                echo "<script>
                alert('erro ao logar')
                location.href='../../index.php'
            </script>";  
            }
        }
?>


