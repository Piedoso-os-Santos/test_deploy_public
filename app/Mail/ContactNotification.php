<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    public function __construct($details)
    {
        $this->details = $details;
    }

    public function build()
    {
        return $this->subject('Confirmação de contacto - Wonders')
                    ->html($this->buildHtml());
    }

    protected function buildHtml()
    {
        $nome = htmlspecialchars($this->details['nome']);
        $email = htmlspecialchars($this->details['email']);
        $telefone = htmlspecialchars($this->details['telefone']);
        $assunto = htmlspecialchars($this->details['assunto']);
        // $email = htmlspecialchars($this->details['email']);
        $mensagem = nl2br(htmlspecialchars($this->details['mensagem']));

        return '
        <div style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 30px;">
          <table width="100%" cellpadding="0" cellspacing="0" style="max-width: 600px; margin: auto; background: #ffffff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.05);">
            <tr>
              <td style="background-color: #155bd5; padding: 20px 30px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                <h2 style="color: #ffffff; margin: 0;">Wonders - Tecnologia e Serviços</h2>
              </td>
            </tr>
            <tr>
              <td style="padding: 30px;">
                <h3 style="color: #333;">Olá, ' . $nome . '!</h3>
                <p style="color: #555; line-height: 1.6;">
                  Agradecemos por entrar em contacto connosco.
                  Recebemos os seus dados com sucesso e nossa equipe entrará em contacto o mais breve possível.
                </p>
                <hr style="border: none; border-top: 1px solid #eee; margin: 30px 0;">
                <h4 style="color: #155bd5;">Detalhes fornecidos:</h4>
                <table cellpadding="10" cellspacing="0" style="width: 100%; color: #555;">
                  <tr style="background-color: #f9f9f9;">
                    <td><strong>Nome:</strong></td>
                    <td>' . $nome . '</td>
                  </tr>
                  <tr>
                    <td><strong>Email:</strong></td>
                    <td>' . $email . '</td>
                  </tr>
                  <tr style="background-color: #f9f9f9;">
                    <td><strong>Telefone:</strong></td>
                    <td>' . $telefone . '</td>
                  </tr>
                  <tr>
                    <td><strong>Assunto:</strong></td>
                    <td>' . $assunto . '</td>
                  </tr>
                  <tr style="background-color: #f9f9f9;">
                    <td><strong>Mensagem:</strong></td>
                    <td>' . $mensagem . '</td>
                  </tr>
                </table>
                <hr style="border: none; border-top: 1px solid #eee; margin: 30px 0;">
                <p style="color: #777; font-size: 14px;">
                  Este é um e-mail automático de confirmação. Para mais informações, entre em contacto connosco via WhatsApp clicando abaixo.
                </p>
                <div style="text-align: center; margin-top: 20px;">
                  <a href="https://wa.me/258872340383" target="_blank" style="background-color: #25D366; color: white; padding: 12px 20px; border-radius: 5px; text-decoration: none; font-weight: bold;">
                    Fale com a nossa equipe no WhatsApp
                  </a>
                </div>
              </td>
            </tr>
            <tr>
              <td style="background-color: #f1f1f1; padding: 20px; text-align: center; font-size: 12px; color: #999; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;">
                &copy; ' . date("Y") . ' Wonders - Tecnologia e Serviços. Todos os direitos reservados.
              </td>
            </tr>
          </table>
        </div>';
    }
}
