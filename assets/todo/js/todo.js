/*global Backbone */
var app = app || {};

(function () {
	'use strict';

	// Our basic **Todo** model has `title`, `order`, and `completed` attributes.
	app.Todo = Backbone.Model.extend({

        idAttribute: 'idItem',

        url: function() {
            var url=  '/item';
            return this.attributes.idItem
                ? url+"/"+this.attributes.idItem
                : url;
        },

		// Default attributes for the todo
		// and ensure that each todo created has `title` and `completed` keys.
		defaults: {
			title: '',
			status: 1
		},

		// Toggle the `completed` state of this todo item.
		toggle: function () {
            var status = this.isCompleted()
                ? app.Todo.status.ACTIVE
                : app.Todo.status.COMPLETED
			this.save({status: status});
		},

        cancel: function() {
            this.save({status: app.Todo.status.CANCELED});
        },

        isCompleted: function() {
            return this.attributes.status === app.Todo.status.COMPLETED;
        },

        getStatusName: function() {
            var status = app.Todo.status;
            var value = this.attributes.status;
            var str = Object.keys(status).filter(function(key) {return status[key] === value})[0];
            return str.toLowerCase();
        }

	});

    // статусы
    app.Todo.status = {
        ACTIVE:     1,
        COMPLETED:  2,
        CANCELED:   3,
    };

})();
