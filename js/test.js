/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
'use strict';

var _createClass = function () {
    function defineProperties(target, props) {
        for (var i = 0; i < props.length; i++) {
            var descriptor = props[i];
            descriptor.enumerable = descriptor.enumerable || false;
            descriptor.configurable = true;
            if ("value" in descriptor) descriptor.writable = true;
            Object.defineProperty(target, descriptor.key, descriptor);
        }
    }

    return function (Constructor, protoProps, staticProps) {
        if (protoProps) defineProperties(Constructor.prototype, protoProps);
        if (staticProps) defineProperties(Constructor, staticProps);
        return Constructor;
    };
}();

function _possibleConstructorReturn(self, call) {
    if (!self) {
        throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
    }
    return call && (typeof call === "object" || typeof call === "function") ? call : self;
}

function _inherits(subClass, superClass) {
    if (typeof superClass !== "function" && superClass !== null) {
        throw new TypeError("Super expression must either be null or a function, not " + typeof superClass);
    }
    subClass.prototype = Object.create(superClass && superClass.prototype, {
        constructor: {
            value: subClass,
            enumerable: false,
            writable: true,
            configurable: true
        }
    });
    if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass;
}

function _classCallCheck(instance, Constructor) {
    if (!(instance instanceof Constructor)) {
        throw new TypeError("Cannot call a class as a function");
    }
}

var java = "local";

// Class creation

var Document = function () {
    function Document(title, author, publisher) {
        _classCallCheck(this, Document);

        this.title = title;
        this.author = author;
        this.publisher = publisher;
    }

    _createClass(Document, [{
        key: "publish",
        value: function publish() {
            this.publisher = true;
        }
    }]);

    return Document;
}();

var Book = function (_Document) {
    _inherits(Book, _Document);

    function Book(title, author, topic) {
        _classCallCheck(this, Book);

        var _this = _possibleConstructorReturn(this, (Book.__proto__ || Object.getPrototypeOf(Book)).call(this, title, author, true));

        _this.topic = topic;
        return _this;
    }

    return Book;
}(Document);

//Destructuring es la descomposicion


var a = void 0,
    b = void 0,
    iterateObj = void 0;


//console.log(typeof iterateObj);
a = 1;
b = 2;
iterateObj = [3, 4, 5];
for (var i = 0; i < iterateObj.length; i++) {
    // console.log('num: '+iterateObj[i]);
}

var cars = new Array("Saab", "Volvo", "BMW");
//console.log(typeof(cars));

// Template literals
var bar = "lol " + cars;
// console.log(bar);

var name = 'Peter';
var surname = 'Griffin';

function sayHello(strings) {
    console.log(strings[0]);
    console.log(strings[1]);
    console.log(strings[2]);
    console.log(arguments.length <= 1 ? undefined : arguments[1]);
    console.log(arguments.length <= 2 ? undefined : arguments[2]);
}

//sayHello `Hello ${name}, ${surname} `;
var _iteratorNormalCompletion = true;
var _didIteratorError = false;
var _iteratorError = undefined;

try {
    for (var _iterator = cars[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
        var _i = _step.value;
    }
    //console.error(i);


    //yield pause from inside 

    // WeakMap if no object inside, Garbaje collector delete it
} catch (err) {
    _didIteratorError = true;
    _iteratorError = err;
} finally {
    try {
        if (!_iteratorNormalCompletion && _iterator.return) {
            _iterator.return();
        }
    } finally {
        if (_didIteratorError) {
            throw _iteratorError;
        }
    }
}

var weakMap = new WeakMap();
var key = {userId: 1};
var key2 = {userId: 2};
/*weakMap.set(key,"Uno");
console.log(weakMap.get(key));
console.log(weakMap.size);
console.log(weakMap.delete(key));
console.log(weakMap.size);
weakMap.set(key2,"Dos");
console.log(weakMap.get(key));
console.log(weakMap.size);*/