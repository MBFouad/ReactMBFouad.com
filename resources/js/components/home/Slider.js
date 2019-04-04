import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios'
import pathHelper from '../../Helper/pathHelper';
export default class Slider extends Component {
    constructor() {
        super();
        this.state = {
            settings: {},
            mainImage: '',
        }
    }

    componentWillMount() {
        axios.get('/api/settings').then(response => {
            this.setState({
                settings: response.data,
                mainImage: response.data['main-image'].value,

            });
            console.log(this.state.mainImage);
        }).catch(error => {
            console.log(error);
        })
    }

    render() {

        return (
            <section id="home" className="home">
                <div className="container">
                    <div className="row">
                        <div className="main_home">
                            <div className="col-sm-6">
                                <div className="home-shadow text-right">
                                    <img src={pathHelper.getSliderImage(this.state.mainImage)} alt=""/>
                                </div>
                            </div>
                            <div className="col-sm-6 text-slider">
                                <div className="home_text text-left">
                                    <h4>kk</h4>
                                    <h1 className="text-black">kk</h1>
                                    <h1 className="text-black">kk</h1>
                                </div>
                                <div className="home_btns m-top-30 text-center">
                                    <ul className="list-inline">
                                        <li><a target="_blank" href="https://github.com/MBFouad/"><i
                                            className="fa fa-github fa-3x"></i></a></li>
                                        <li><a target="_blank" href="https://www.facebook.com/mbahaa.eldien"><i
                                            className="fa fa-facebook fa-3x"></i></a></li>
                                        <li><a target="_blank" href="https://twitter.com/Mohamed50915950"><i
                                            className="fa fa-twitter fa-3x"></i></a>
                                        </li>
                                        <li><a target="_blank"
                                               href="https://www.linkedin.com/in/mohamed-bahaa-el-dien-598b21102/"><i
                                            className="fa fa-linkedin fa-3x"></i></a></li>
                                    </ul>
                                </div>
                                <div className="home_btns m-top-10 text-center">
                                    <a href="{{route('homeIndex').'/#about'}}" className="btn btn-primary m-top-20">about
                                        me</a>
                                </div>

                                <a className="mouse-scroll" href="#about">
                                    <span className="mouse">
                                        <span className="mouse-movement"></span>
                                    </span>
                                    <span className="mouse-message fadeIn">scroll</span>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
            </section> /* <!--End off Home Sections-->*/

        );
    }
}
