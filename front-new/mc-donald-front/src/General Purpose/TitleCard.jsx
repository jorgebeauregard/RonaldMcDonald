import React from 'react';

const TitleCard = (props) => {
    return ( 
        <div className={'card has-background-' + props.background}>
            <div className="card-content">
                <p className="title is-2 has-text-white">{props.title}</p>
            </div>
        </div>
    );
}
 
export default TitleCard;