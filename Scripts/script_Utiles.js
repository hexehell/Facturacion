function fnObtenerMesAño()
{

	var dt = new Date($.now());

	var nMes = dt.getMonth();

	if(nMes<10)
		nMes = "0"+nMes;

	return nMes + dt.getFullYear();



	//return ;
}


function fnObtenerMesLetra()
{
	var dt = new Date($.now());

	var nMes = dt.getMonth();

}