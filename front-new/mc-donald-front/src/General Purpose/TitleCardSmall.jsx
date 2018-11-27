import React from 'react';

const TitleCardSmall = (props) => {
    return ( 
        <div className={'card has-background-' + props.background}>
            <div className="card-content">
                <p className="title is-4 has-text-white">{props.title}</p>
            </div>
        </div>
    );
}
 
export default TitleCardSmall;