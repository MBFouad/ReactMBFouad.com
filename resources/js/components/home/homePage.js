import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import  Slider from './Slider'

export default class HomePage extends Component {
    render() {
        return (
            <Slider />
        );
    }
}

if (document.getElementById('home-page-container')) {
    ReactDOM.render(<HomePage />, document.getElementById('home-page-container'));
}
