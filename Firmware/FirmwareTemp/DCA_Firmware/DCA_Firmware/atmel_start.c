#include <atmel_start.h>

/**
 * Initializes MCU, drivers and middleware in the project
 **/
void atmel_start_init(void)
{
	system_init();
	//tcpip_lite_stack_init();
	stdio_redirect_init();
}
