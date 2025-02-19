Siguiente la arquitectura propuesta en clase.
Recurso: EjecutivoCuentas
Endpoint: Agregar.
Request:{
	{
  "DescripcionEjecutivoDeCuenta": "string"
}
Response: {
  "EjecutivoDeCuentas": {
    "Id": 0,
    "Descripcion": "string",
    "Usuario": "string"
  }
}
Lógica: Devolver el objeto indicado en el response, valorizado de la siguiente manera
	Id: 1,
	Descripcion: [DescripcionEjecutivoDeCuenta del request.]
	Usuario: “anonimo”
Endpoint: ConsultarTodos.
Request: no tiene
Response: {
  "ListEjecutivosDeCuentas": [
  
    {
      "Id": 1,
      "Descripcion": "Ejecutivo 1",
      "Usuario": "comercial"
    },
    {
      "Id": 2,
      "Descripcion": "Ejecutivo zona sur",
      "Usuario": "javkin"
    }
  ]
}
Lógica: Devuelve el objeto indicado tal cual esta en el response.
Endpoint: Consultar.php?id=1
Request: no tiene
Response: {
  "EjecutivoDeCuenta":  {
      "Id": 1,
      "Descripcion": "Ejecutivo 1",
      "Usuario": "comercial"
    }
}
Lógica: Devolver el objeto indicado tal cual está en el response solo modificando el Id, según sea el id que recibimos por GET en la url
