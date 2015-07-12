(function(){

	'use strict';

	var app = angular.module('app');

	app.controller('8080Controller', ['$scope', function($scope) {

		$scope.title = "Intel 8080 emulator";
		var ctrl = this;

		// registers
		ctrl.PC = 0;
		ctrl.SP = 0;
		ctrl.W = 0;
		ctrl.Z = 0;
		ctrl.B = 0;
		ctrl.C = 0;
		ctrl.D = 0;
		ctrl.E = 0;
		ctrl.H = 0;
		ctrl.L = 0;

		// instruction register
		ctrl.ir = 0;

		// alu registers
		this.SIGN = 0;
		this.ZERO = 0;
		this.HALFCARRY = 0;
		this.PARITY = 0;
		this.CARRY = 0;

		this.INTERRUPT = 0;


		this.count_instructions = 0;
		this.disassembly_pc = 0;
		//this.mappingTable = new Array(0x100);
		//this.instruction_per_frame = 4000;
		//this.half_instruction_per_frame = 4000 >> 1;


	}]);

})();
