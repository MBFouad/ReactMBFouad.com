import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import  InnerProject from './InnerProject';

export default class Project extends Component {
    constructor() {
        super();
        this.state = {
            paragraphs: {},
            portfolioDescription: '',
            projects: [],
        }
    }

    componentWillMount() {
        axios.get('/api/paragraphs').then(response => {
            this.setState({
                paragraphs: response.data,
                portfolioDescription: response.data['portfolio-description'].value,
            });
        }).catch(error => {
            console.log(error);
        });

        axios.get('/api/project').then(response => {
            this.setState({
                projects: response.data,
            });
        }).catch(error => {
            console.log(error);
        });
    }

    render() {

        return (
            <section id="portfolio" className="portfolio bg-white roomy-150">
                <div className="container">
                    <div className="row">
                        <div className="main_portfolio">

                            <div className="col-md-10 col-md-offset-1 sm-m-top-50">
                                <div className="portfolio_content">
                                    <div className="head_right">
                                        <h2>portfolio</h2>
                                    </div>

                                    <div className="portfolio_content_text">
                                        <p>{this.state.portfolioDescription}</p>
                                    </div>
                                </div>

                                <div className="may_client m-top-50">
                                    <div className="head_title text-center">
                                        <h5><span className="divider"></span> my clients<span
                                            className="divider"></span></h5>
                                    </div>
                                    <div className="client_brand m-top-60 text-center">
                                        <div className="list-inline">
                                            {this.state.projects.map(function (name, index) {
                                                return <InnerProject
                                                    key={ index }
                                                    url={name.url}
                                                    name={name.name}
                                                    image={name.image}
                                                    company_name={name.company_name}
                                                />;
                                            })}

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        );
    }
}

if (document.getElementById('project-page-container')) {
    ReactDOM.render(<Project />, document.getElementById('project-page-container'));
}
