import React from 'react';

const DashboardCard = (props) => {
    return ( 
        <div>
                <div className={'card has-background-' + props.background}>
                    <div className="card-content">
                        <div className="columns">
                            <div className="column is-one-fifth">
                                <span className="icon has-text-white padding">
                                    <i className={'fas fa-2x fa-' + props.icon}></i>
                                </span>
                            </div>
                            <div className="column is-four-fifths">
                                <div className="content">
                                    <p className="title is-5 has-text-white has-text-right has-text-left-mobile is-size-3-mobile">{props.title}</p>
                                    <p className="subtitle is-1 has-text-white has-text-right has-text-left-mobile is-size-2-mobile">{props.subtitle}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    );
}
 
export default DashboardCard;