> Aprendiendo CodeIgniter 3

# MVC

## Controlador

> [Documentación](https://www.codeigniter.com/user_guide/general/controllers.html)

Los Controladores o _Controllers_ se encuentran en `/application/controllers`.

```php
// Evita que se cargue el php como una vista.
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
```

Devolver un texto plano.

```php
class Welcome extends CI_Controller {
  public function index()
	{
		echo 'Hola carambola!';
	}
}
```

Cargar una vista.

```php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
  public function index()
	{
		$this->load->view('welcome_message');
	}
}
```

### Métodos

A través de la URL podemos acceder: `http://localhost/codeigniter/index.php/CONTROLADOR/METODO`

Si tenemos el controlador "Welcome" y el método "uno":

- `http://localhost/codeigniter/index.php/welcome/uno`

#### Redireccionar método hacia otro.

Cuando se requiera redireccionar un método hacia otro utilizamos el método **_remap()**, cuyo siempre será *el primero en llamarse* por CodeIgniter.

```php
public function _remap($method, $params = array())
{
  // Si el método es "uno" redireccionamos al "dos".
  if ($method === 'uno') {
    $this->dos();
  } else {
    // En caso contrario se redirecciona al método solicitado.
    $this->$method();
  }
}

public function dos()
{
  echo 'Método Dos';
}
```

## Vista

> [Documentación](https://www.codeigniter.com/user_guide/general/views.html)

Las vistas o _Views_ se encuentran en `/application/views`.

A través del controlador llamamos las vistas, cuyas pueden estar en _php_ (por defecto) e incluso en _html_.

- **PHP**: CONTROLLER `$this->load->view('nombre_vista');` y VIEW `nombre_vista.php`.
- **HTML**: CONTROLLER `$this->load->view('nombre_vista.html');` y VIEW `nombre_vista.html`.

# Rutas

> [Documentación](https://www.codeigniter.com/user_guide/general/routing.html)

Las rutas o _routes_ se encuentran en `/config/routes.php`.

Existen 3 rutas reservadas:

```php
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
```

> Con la primera ruta definimos el controlador por defecto `$route['default_controller'] = 'NombreControlador';`.