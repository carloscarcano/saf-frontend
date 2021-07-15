<?php
class ticketController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function nuevo()
    {
        $this->view->render('ticket/nuevo');
    }

    function nuevoguardar()
    {
        $descripcionError = $_POST['descripcionError'];
        $fechaError = $_POST['fechaError'];
        
        $datosJSON = json_encode([
            "idUsuario" => "1",
            "descripcionError" => $descripcionError,
            "fechaError" => $fechaError
        ]);

        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => constant('API_REST_BASE_URL'),
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => $datosJSON,
          CURLOPT_HTTPHEADER => array('Content-Type: application/json')
        ));
        
        $response = curl_exec($curl);
        $httpCodeResponse = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        $responseJSON = json_decode($response, true);

        $result = array();
        $result['httpCode'] = $httpCodeResponse;

        if ($httpCodeResponse == 201)   
            $result['idTicket'] = $responseJSON['idTicket'];
        else
            $result['mensaje'] = $responseJSON['mensaje'];

        echo json_encode($result);
    }

    function consultar($parametros)
    {
        $idTicket = $parametros[0];
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, constant('API_REST_BASE_URL') . $idTicket);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($curl);
        $httpCodeResponse = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        curl_close($curl);
        $responseJSON = json_decode($response, true);

        $viewData = [
            'idTicket' => $idTicket,
            'descripcionError' => $responseJSON['descripcionError'],
            'fechaError' => $responseJSON['fechaError'],
            'fechaTicket' => $responseJSON['fechaTicket'],
            'idEstadoTicket' => $responseJSON['idEstadoTicket'],
            'estadoTicket' => $this->obtenerEstadoTicket($responseJSON['idEstadoTicket']),
        ];

        $this->view->render('ticket/consultar', $viewData);
    }
    
    function modificar($parametros)
    {
        $idTicket = $parametros[0];
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, constant('API_REST_BASE_URL') . $idTicket);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($curl);
        $httpCodeResponse = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        curl_close($curl);
        $responseJSON = json_decode($response, true);

        $viewData = [
            'idTicket' => $idTicket,
            'descripcionError' => $responseJSON['descripcionError'],
            'fechaError' => $responseJSON['fechaError'],
            'fechaTicket' => $responseJSON['fechaTicket'],
            'idEstadoTicket' => $responseJSON['idEstadoTicket']
        ];

        $this->view->render('ticket/modificar', $viewData);
    }

    function modificarguardar()
    {
        $idTicket = $_POST['idTicket'];
        $descripcionError = $_POST['descripcionError'];
        $fechaError = $_POST['fechaError'];
        $idEstadoTicket = $_POST['idEstadoTicket'];
        
        $datosJSON = json_encode([
            "descripcionError" => $descripcionError,
            "fechaError" => $fechaError,
            "idEstadoTicket" => $idEstadoTicket
        ]);

        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => constant('API_REST_BASE_URL') . $idTicket,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'PATCH',
          CURLOPT_POSTFIELDS => $datosJSON,
          CURLOPT_HTTPHEADER => array('Content-Type: application/json')
        ));
        
        $response = curl_exec($curl);
        $httpCodeResponse = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        $responseJSON = json_decode($response, true);

        $result = array();
        $result['httpCode'] = $httpCodeResponse;

        if ($httpCodeResponse =! 200)   
            $result['mensaje'] = $responseJSON['mensaje'];

        echo json_encode($result);
    }

    function render()
    {
        $this->view->render('ticket/index');
    }

    private function obtenerEstadoTicket($idEstadoTicket)
    {
        $estadoTicket = '';

        switch($idEstadoTicket)
        {
            case 1:
                $estadoTicket = 'PENDIENTE';
                break;
            case 2:
                $estadoTicket = 'EN PROCESO';
                break;
            case 3:
                $estadoTicket = 'ATENDIDO';
                break;
            case 4:
                $estadoTicket = 'DESCARTADO';
                break;
        }

        return $estadoTicket;
    }
}
?>
