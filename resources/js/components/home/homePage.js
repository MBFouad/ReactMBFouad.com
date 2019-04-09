import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import  Slider from './Slider';
import  About from './About';
import  Portfolio from './Portfolio';


export default class HomePage extends Component {
    constructor() {
        super();
        this.state = {
            settings: {},
            mainImage: '',
            SliderMainTitle:'',
            firstHashTag:'',
            secondHashTag:'',
            websiteName:'',
            paragraphs: {},
            aboutMeDescription: '',
            portfolioDescription:'',
        }
    }
    componentWillMount() {
        axios.get('/api/settings').then(response => {
            this.setState({
                settings: response.data,
                mainImage: response.data['main-image'].value,
                SliderMainTitle: response.data['slider-main-title'].value,
                firstHashTag: response.data['first-hash-tag'].value,
                secondHashTag: response.data['second-hash-tag'].value,
                websiteName: response.data['website-name'].value,

            });
        }).catch(error => {
            console.log(error);
        });
        axios.get('/api/paragraphs').then(response => {
            this.setState({
                paragraphs: response.data,
                aboutMeDescription: response.data['about-me-description'].value,
                portfolioDescription: response.data['portfolio-description'].value,
            });
        }).catch(error => {
            console.log(error);
        })
    }
    render() {
        return (
            <div>
                <Slider 
                mainImage={this.state.mainImage} 
                SliderMainTitle={this.state.SliderMainTitle}
                firstHashTag={this.state.firstHashTag}
                secondHashTag={this.state.secondHashTag}
                />
                <About  
                websiteName={this.state.websiteName}  
                aboutMeDescription={this.state.aboutMeDescription}
                />
                <Portfolio portfolioDescription={this.state.portfolioDescription}/>
            </div>
           
        );
    }
}

if (document.getElementById('home-page-container')) {
    ReactDOM.render(<HomePage />, document.getElementById('home-page-container'));
}
