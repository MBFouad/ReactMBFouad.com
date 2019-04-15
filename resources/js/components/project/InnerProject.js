/**
 * Created by mfouad on 15/04/19.
 */
import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class InnerProject extends Component {
render(){
    return(
        <div className="col-md-4 col-sm-6 col-xs-12 no-padding height-160">
            <a href={this.props.url}>
                <img className="project-img"
                     src={this.props.image}
                     alt={this.props.name}/>
            </a>
            <h6>{this.props.name}(<b>{this.props.company_name}</b>)</h6>
        </div>
    );
}
}