class StaticController < ApplicationController
  def baxterross
    
  end

  def sidebench
  
  end

  def validation
    render json: {
      message: "Some message goes here"
    }, status: 400
  end
  
  def tautology
    @projects = [
      {
        name: 'Violet Grey',
        url: 'http://www.violetgrey.com/',
        description: 'A high end e-commerce site and glossy content publishing platform with a custom CMS and order management framework.'
      },
      {
        name: 'U Got A Wish',
        url: 'http://www.ugotawish.com/',
        description: 'A peer-to-peer fashion consignment platform built on a highly customized e-commerce platform.'
      },
      {
        name: 'Yogaglo',
        url: 'http://www.yogaglo.com/',
        description: 'A fitness company deliving streaming video on the web and multiple devices from a custom designed and built API.'
      },
      {
        name: 'Unreasonable Adventures',
        url: 'https://unreasonableadventures.com/',
        description: 'An adventure travel booking platform with embeddable booking widget and a home-brewed client-facing CRM.'
      },
      {
        name: 'StartGrid',
        url: 'https://www.startgrid.com/',
        description: 'A collaboration tool for startups, entrepreneus, and organizations.'
      }
    ]
  end
end
