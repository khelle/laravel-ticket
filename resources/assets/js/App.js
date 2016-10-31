/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local Dependencies
 * ---------------------------------------------------------------------------------------------------------------------
 */
var Fx = require('./Fx/Fx');

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Code
 * ---------------------------------------------------------------------------------------------------------------------
 */

/**
 * @constructor
 */
var App = module.exports = function() {

    /**
     * @member {Fx} fx
     */
    Object.defineProperty(this, 'fx', {
        value: new Fx()
    });
};

/**
 * @public
 * @returns {App}
 */
App.prototype.init = function() {

    var fx = this.fx;

    fx
        .createAjaxForms()
    ;

    return this;
};

/**
 * @public
 * @returns {App}
 */
App.prototype.load = function() {

    var fx = this.fx;

    return this;
};
